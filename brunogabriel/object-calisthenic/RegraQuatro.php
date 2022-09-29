<?php

/* foreach ($students as $student) {
    if ($student->isGoldAccount()) {
        $student->addBonus(50);
    }
} */

class StudentCollection {

    private array $students= []

    public function addStudent(array $student): void
    {
        $this->students = $student;
    }

    public function idGoldAccount(string $nomeStudent): void
    {
        //$this->students procuraria o nome estudante e verifica se

    }

    public function count(): void
    {
        //quantidade de estudantes nessa coleção
    }

    public function addBonus(float $value, array $student): void
    {
        //
    }

    public function filterAccountGold(): void
    {

    }
    
}

$students = new StudentCollection;

$student->addStudent([]);