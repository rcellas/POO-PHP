<?php
namespace App\Abstraccion;

/**
 * el abstract indica que no se puede instanciar
 * solo se puede heredar
 * es decir que, solo el hijo puede instanciar
 */
abstract class Vehicle{

    // especificar el tipo de dato (int, string, array, etc)
    // el metodo protected permite que los hijos puedan acceder
    
    protected int $wheels;
    protected int $velocity = 0;
    private string $color;
    
    /**
     * @param int $wheels
     * @param string $color
     */
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    /**
     * @return void
     * esta será una función obligatoria para todos los vehiculos
     * y solo se puede usar en caso de ser una función abstracta pq es obligatoria 
     */
    public abstract function accelerate(int $increase): void;

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