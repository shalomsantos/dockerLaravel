<?php

namespace App\Http\Controllers;

use App\Services\ProductService;

class HomeController extends Controller
{
    public function __construct(
        protected ProductService $service
    ){}
    
    public function index(){
        $products = $this->service->all();
        return view('home', ['products' => $products]);
    }
}
