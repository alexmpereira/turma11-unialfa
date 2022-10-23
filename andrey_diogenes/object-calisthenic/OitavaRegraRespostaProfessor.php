<?php

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

$person = new Person(....);
$addres = new Address(...);
$courses = new Courses(..);

$student = new Student($person, $address, $courses);