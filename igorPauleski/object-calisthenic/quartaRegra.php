<?php

foreach ($students as $student) {
    if ($student->isGoldAccount()) {
        $student->addBonus(50);
    }
}

class  StudentCollection
{
    private array $students = [];

    public function addStudent(array $student): void
    {
        $this->students = $student;
    }

    public function isGoldAccount(string $nomeStudent): void 
    {
        // $this->students Procuraria o nome do estudante e verificar se ele é gold
    }

    public function count(): void 
    {
            // Quantidade de estudantes nessa coleção
    }

    public function addBonus(float $value, array $student): void 
    {

    }

    public function filterAccountGold(): void
    {
        //
    }
}

$students = new StudentCollection;

$student->addStudent([]);