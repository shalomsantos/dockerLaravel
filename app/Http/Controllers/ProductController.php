<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $service,
        public readonly Product $product,
    )
    {}

    public function index()
    {   
        $search = request('search');

        if($search){
            $products = $this->service->findByName($search);
        }else{
            $products = $this->service->all();
        }

        return view('/produto/products', ['products' => $products, 'search' => $search]);
    }

    public function create()
    {
        return view('/produto/create_product');
    }

    public function store(Request $request)
    {   
        $productCreate = $this->service->new([
            'nome' => $request->input('nome'),
            'categoria' => $request->input('categoria'),
            'valor' => $request->input('valor'),
            'path' => $request->input('path'),
        ]);
        
        if($productCreate){
            return redirect('products')->with('message', 'Produto criado com sucesso.');   
        }
        return redirect()->back()->with('message', 'Erro ao criar produto.');   
    }

    public function show(string $id)
    {
        $productContent = $this->service->findById($id);
        return view('/produto/product_show', ['product' => $productContent]);
    }

    public function edit(string $id)
    {
        $product = $this->product->find($id);
        return view('/produto/product_edit', ['product' => $product]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->service->updater($request, $id);

        if($updated){
            return redirect()->route('products.index')->with('message', 'Atualização bem sucedida.');
        }
        return redirect()->route('products.index')->with('message', 'erro ao atualizar.');
    }

    public function destroy(string $id)
    {
        $this->service->excluir($id);
        return redirect()->route('products.index');
    }
}
