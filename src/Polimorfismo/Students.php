<?php

namespace App\Polimorfismo;

class Students
{
    private string $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function save():string
    {
        if($this->repository == 'database')
        {
            return 'save in ' . $this->repository;
        }
        else
        {
            return 'save in ' . $this->repository;
        }
    }
}