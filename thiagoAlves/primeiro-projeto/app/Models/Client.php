<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // use HasFactory;

    protected $fillable = ['nome', 'endereco', 'observacao'];
    use HasFactory;


    // public static function deleteClient($id)
    // {
    //     return Client::where('id', $id)->delete();
    // }
}
