<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    protected $fillable = ['nome', 'regiao', 'data_criacao'];
    use HasFactory;
}
