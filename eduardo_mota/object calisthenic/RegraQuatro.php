<?php

foreach ($students as $student) {
    if ($student->isGoldAccount()) {
        $student->addBonus(50);
    }
}

class Students{
    
    private array $students = [];

   
}