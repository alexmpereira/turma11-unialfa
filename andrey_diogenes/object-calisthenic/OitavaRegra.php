<?php
/*
 * Não tenha classes com mais de duas variaveis de instância.
*/

 //jeito errado
 class StudentErrado
 {
   public string $name;
   public string $email;
   public string $phone;
   public $address;
   public $city;
   public $country;
   public $courses;
   public $notes;
 }
 
 $student = new StudentErrado(
   "Testte",
   "jskdlfjdsk@gmail.com",
   "+74817489173",
   "...",
   "...",
   "...",
   "...",
   "..."
 );
/*
 class Student
 {

    public function __construct(DadosEstudanteCurso $courses)
    {
        $this->courses = $courses;
    }

    public function notaCurso()
    {
        return $this->courses->notes;
    }
 }

 class DadosEstudanteCurso
 {
    //public $courses;
    //public $notes;

    public function __construct(string $courses, string $notes)
    {
        $this->courses = $courses;
        $this->notes = $notes;
    }
 }

 class DadosContatoStudent
 {
    public string $name;
    public string $email;
    public string $phone;

    public function __construct(string $name, string $email, $phone)
    {
        $this->courses = $name;
        $this->courses = $email;
        $this->phone = $phone;
    }
 }

 class DadosEnderecoStudent
 {
    public function __construct(string $city, string $country)
    {
        $this->city = $city;
        $this->country = $country;
    }
 }
 */