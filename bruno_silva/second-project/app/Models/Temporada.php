<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory;
    protected $fillable = ['numero'];
    public $timestamps = false;

    /*
     * Uma temporada tem muitos episodios
     */
    public function episodios() {
        return $this->hasMany(Episodio::class);
    }

    /*
     * Uma temporada pertence a uma série
     */
    public function serie() {
        return $this->belongsTo(Serie::class);
    }
}
