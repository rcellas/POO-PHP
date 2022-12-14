<?php
namespace App\Abstraccion;

class Car extends Vehicle{

    public function __construct(string $color)
    {
        // el parent(padre) hace referencia a la clase padre
        // en este caso a la clase Vehicle
        Parent::__construct($color);
        $this->wheels = 4;
    }
    
    /**
     * @return int
     */
    public function accelerate(int $increase): void
    {
        $this->velocity += $increase;
    }
}