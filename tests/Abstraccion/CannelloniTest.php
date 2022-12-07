<?php

namespace Tests\Abstraccion;

use App\Abstraccion\Cannelloni;
use PHPUnit\Framework\TestCase;

class CannelloniTest extends TestCase{
    
    public function testNumberCannelloni()
    {
        //GIVE-> Escenario
        // Tener acceso al objeto Canelones
        $cannelloni = new Cannelloni();
        // WHEN-> Accion
         // sut = system under test
        $sut = $cannelloni->number;
        // THEN-> Resultado
        $this->assertEquals(5, $sut);
    }


}