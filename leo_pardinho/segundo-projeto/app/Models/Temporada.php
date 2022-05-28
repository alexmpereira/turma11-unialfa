<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

use PhpParser\ErrorHandler\Collecting;

class Temporada extends Model
{
    use HasFactory;
    protected $fillable = ['numero'];
    public $timestamps = false;

    //Uma temporada tem muitos episódios.

    public function episodios() {
        return $this->hasMany(Episodio::class);
        }

    // Uma temporada pertence a uma série.

    public function serie() {
        return $this->belongTo(Serie::class);
    }

    public function getEpisodiosAssistidos(): Collection {

        return $this->episodios->filter(function(Episodio $episodio){
            return $episodio->assistido;
            
        });
    }
}
