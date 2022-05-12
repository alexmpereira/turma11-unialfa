<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory;

    //temporada tem muitos episodios

    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }

    //uma temporada pertence a uma serie

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}
