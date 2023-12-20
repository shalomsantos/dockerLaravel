<?php
namespace App\DTO;

// use App\Enums\ProductCategory;

class CreateProductDTO{
    public function __construct(
        public readonly string $nome,
        public readonly string $categoria,
        public readonly int $valor,
    ){}
}
?>