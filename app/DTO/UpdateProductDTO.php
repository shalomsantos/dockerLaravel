<?php
namespace App\DTO;

use App\Enums\ProductCategory;

class CreateProductDTO{
    public function __construct(
        public int $id,
        public string $nome,
        public ProductCategory $categoria,
        public string $valor,
    ){}
}
?>