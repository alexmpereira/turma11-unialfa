<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['nome'];
    use HasFactory;
<<<<<<< HEAD

    public function temporadas()
    {
        return $this->hasMany(Temporada::class);
    }
=======
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
}
