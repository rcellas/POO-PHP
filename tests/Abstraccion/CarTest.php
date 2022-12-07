<?php

namespace Tests\Abstraccion;

use App\Abstraccion\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
   public function testCarHas4Wheels()
   {
        //GIVE-> Escenario
        // Tener acceso al objeto Car
        $car = new Car("red");
        //WHEN-> Accion
        // Obtener el numero de ruedas
        // sut = system under test
        $sut = $car->getWheels();
        //THEN-> Resultado
        $this->assertEquals(5, $sut);
   }

   public function testCarHasColor()
   {
        //GIVE-> Escenario
        // Tener acceso al objeto Car
        $car = new Car("red");
        //WHEN-> Accion
        // Obtener el numero de ruedas
        // sut = system under test
        $sut = $car->getColor();
        //THEN-> Resultado
        $this->assertEquals("red", $sut);
   }

   public function testCarHasStartVelocity0()
   {
        //GIVE-> Escenario
        // Tener acceso al objeto Car
        $car = new Car("red");
        //WHEN-> Accion
        // Obtener el numero de ruedas
        // sut = system under test
        $sut = $car->getVelocity();
        //THEN-> Resultado
        $this->assertEquals(0, $sut);
   }

   public function testCarWhenAccelerateVelocityIncreaseInNumber()
   {
        //GIVE-> Escenario
        // Tener acceso al objeto Car
        $car = new Car("red");
        //WHEN-> Accion
        // Obtener el numero de ruedas
        // sut = system under test
        $car->accelerate(5);
        $sut = $car->getVelocity();
        //THEN-> Resultado
        $this->assertEquals(5, $sut);
   }

}
