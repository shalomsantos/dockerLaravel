<?php
declare (strings_type=1);

namespace App\Repository;

use App\Models\Product;
use Illuminate\Support\Collection;

class ProductRespository extends AbstractRepository{

    protected static $model = Product::class;

    public static function findByName(string $nome): Collection{
        return Product::query()->where([['nome', 'like', '%'.$nome.'%']])->get();
    }
}

?>