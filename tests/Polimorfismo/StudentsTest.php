<?php

namespace Tests\Polimorfismo;

use App\Polimorfismo\Students;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{

    public function testSaveStudentsInDB()
    {
        //GIVE-> Escenario
        // Tener acceso al objeto Student
        $student = new Students('database');
        $sut=$student->save();

        $this->assertEquals('save in database', $sut);
    }

    public function testSaveStudents()
    {
        //GIVE-> Escenario
        // Tener acceso al objeto Student
        $student = new Students('file');
        $sut = $student->save();

        $this->assertEquals('save in file', $sut);
    }
}