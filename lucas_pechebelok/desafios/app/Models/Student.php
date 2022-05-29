<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
<<<<<<< HEAD
    protected $fillable = ['name', 'cpf', 'birthdate'];

=======
    protected $fillable = ['nome', 'cpf', 'nascimento'];
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
    use HasFactory;
}
