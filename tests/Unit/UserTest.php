<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    // NOMENCLATURA  ( AÇÃO + QUEM_OU_OQUE + RESULTADO_ESPERADO )
    public function test_check_if_columns_user_is_correct(): void
    {
        $user = new User();

        $expected = [
            'nome',
            'email',
            'telefone',
            'senha',
        ];

        $arrayCompared = array_diff($expected, $user->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
