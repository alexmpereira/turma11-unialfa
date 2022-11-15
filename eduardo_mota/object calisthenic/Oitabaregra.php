<?php

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