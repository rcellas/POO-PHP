<?php
namespace App\Abstraccion;

class Car{

    // especificar el tipo de dato (int, string, array, etc)
    private int $wheels;
    private int $velocity = 0;
    private string $color;
    
    /**
     * @param int $wheels
     * @param string $color
     */
    public function __construct(string $color)
    {
        $this->color = $color;
        $this->wheels = 5;
    }

    /**
     * @return int
     */
    public function accelerate(int $increase): void
    {
        $this->velocity += $increase;
    }

    /**
     * @return int
     */
    public function getWheels(): int
    {
        return $this->wheels;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getVelocity(): int
    {
        return $this->velocity;
    }

}