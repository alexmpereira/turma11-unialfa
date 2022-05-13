<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory;
    /**
     * Uma temporada pertence tem muitos episódio
     */
    public function episosios() {
        return $this->hasMany(Episodio::class);
    }
    /**
     * Uma temporada pertence a uma serie
     */
    public function serie() {
        return $this->belongsTo(Serie::class);
    }
}
