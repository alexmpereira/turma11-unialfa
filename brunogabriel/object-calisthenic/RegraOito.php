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


//jeito certo

class Student
{
    public Person $person;
    public Address $address;
    public Courses $courses;
}

class Person
{

}

class Address
{

}

class Courses
{

}

$person = new Person(.....);
$address = new Address(.....);
$courses = new Courses(.....);

$student = new Student($person, $address, $couses);