<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
<<<<<<< HEAD
    protected $fillable = ['name', 'address', 'observation'];
=======
    protected $fillable = ['nome', 'endereco', 'observacao'];
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
    use HasFactory;
}
