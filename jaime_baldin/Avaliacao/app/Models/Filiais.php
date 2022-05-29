<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiais extends Model
{
    protected $fillable = [
        'nome_filial',
        'regiao',
        'data_criacao'
    ];

    use HasFactory;
}
