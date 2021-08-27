<?php

use Lufia\Str;

class StrTest extends PHPUnit\Framework\TestCase
{
    public function test_studly_method_convert_strings()
    {
        $this->assertSame(
            'Name',
            Str::studly('name'),
            'Llamar a Str::studly con name no retorna el valor esperado Name'
        );

        $this->assertSame(
            'FirstName',
            Str::studly('first_name'),
            'Llamar a Str::studly con first_name no retorna el valor esperado Name'
        );

        $this->assertSame(
            'BirthDate',
            Str::studly('birth_date'),
            'Llamar a Str::studly con birth_date no retorna el valor esperado Name'
        );

        exit("All Ok");
    }
}
