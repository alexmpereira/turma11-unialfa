<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiais extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_filial',
        'regiao',
        'data_criacao'
    ];
}
