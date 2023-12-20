<?php
namespace App\Services;

use App\Repository\ProductRespository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductService{

    public function __construct(
        protected ProductRespository $repository
    ){}

    public function all(string $filter = null): Collection{
        return $this->repository->all($filter);
    }

    public function findByName(string $nome = null): Collection{
        return $this->repository->findByName($nome);
    }

    public function new(array $attibutes = []){
        return $this->repository->new($attibutes);
    }

    public function findById(int $id = null): Model | null{
        return $this->repository->findById($id);
    }

    public function excluir(int $id = null): bool{
        return $this->repository->excluir($id);
    }

    public function updater(Request $request = null, int $id = null): bool{
        return $this->repository->updater($request, $id);
    }
}
?>