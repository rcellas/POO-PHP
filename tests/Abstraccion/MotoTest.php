<?php

namespace Tests\Abstraccion;

use App\Abstraccion\Moto;
use PHPUnit\Framework\TestCase;

class MotoTest extends TestCase
{
    public function testCarHas2Wheels()
    {
        //GIVE-> Escenario
        // Tener acceso al objeto Car
        $moto = new Moto("blue");
        //WHEN-> Accion
        // Obtener el numero de ruedas
        // sut = system under test
        $sut = $moto->getWheels();
        //THEN-> Resultado
        $this->assertEquals(2, $sut);
    }

    public function testCarHasStartVelocity0()
   {
        //GIVE-> Escenario
        // Tener acceso al objeto Car
        $moto = new Moto("blue");
        //WHEN-> Accion
        // Obtener el numero de ruedas
        // sut = system under test
        $sut = $moto->getVelocity();
        //THEN-> Resultado
        $this->assertEquals(0, $sut);
   }

   public function testMotoWhenAccelerateVelocityIncreaseInNumber()
   {
        //GIVE-> Escenario
        // Tener acceso al objeto Car
        $moto = new Moto("blue");
        //WHEN-> Accion
        // Obtener el numero de ruedas
        // sut = system under test
        $moto->accelerate(5);
        $sut = $moto->getVelocity();
        //THEN-> Resultado
        $this->assertEquals(10, $sut);
   }
}