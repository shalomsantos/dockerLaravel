<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Repository\ProductRespository;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    /**
     * @test
     */
    public function check_column_product_is_correct(): void
    {
        
        $product = new Product();
            $expected = [
            'nome',
            'categoria',
            'valor',
            'path',
        ];

        $arrayCompared = array_diff($expected, $product->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
