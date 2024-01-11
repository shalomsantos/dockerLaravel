<?php

namespace Tests\Unit;

use App\Models\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
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
