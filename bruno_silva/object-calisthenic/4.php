<?php


class StudentsColletion
{
    private array $students = [];

    public function addStudents(array $students)
    {
        $this->students = $students;
    }

    public function isGoldAccont(string $nameStudent): void
    {
        # code...
    }

    public function count(): void
    {
        # code...
    }

    public function addBonus(float $value, array $student): void
    {
        # code...
    }
}

$student = new StudentsColletion;

$student->addStudents([]);
