<?php
/*
 * Coleções de primeira classe
 * Encapsular coleçoes em classes
*/
/*
foreach ($students as $student) {
    if ($student->isGoldAccount()) {
        $student->addBonus(50);
    }
}
*/

class StudentCollection
{
    private array $students = [];

    public function addStudent(array $students): void
    {
        $this->students = $students;
    }

    public function isGoldAccount(string $nomeStudent) : void
    {
        //$this->students procuraria o nome do estudante e verifica se é gold account
    }

    public function count() : void
    {
        //quantidades de estudantes nessa coleção
    }

    public function addBonus(float $value, array $student): void
    {

    }

    public function filterAccountGold(): void
    {

    }
}

$students = new StudentCollection;

$student->addStudent([]);