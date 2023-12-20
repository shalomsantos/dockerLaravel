<?php
namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface RepositoryInterface{
    //create, read, update, delete
    // CRIAR NOVO REGISTRO
    // RETORNAR TODOS
    // ATUALIZAR REGISTRO POR ID
    // DELETAR REGISTRO POR ID
    
    //EXTRAS
    // PROCURAR POR ID
    // LOADMODEL?
    public static function new(array $attributes): Model | null;
    public static function all(): Collection;
    public static function updater(Request $request, int $id): bool;
    public static function excluir(int $id): bool;
    public static function findById(int $id): Model | null;
    public static function loadModel(): Model;
}

?>