<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    use HasFactory;
    protected $fillable = ['numero'];
    public $timestamps = false;
    //Um episódio pertence a uma temporada.

    public function temporada() {
        return $this->belongsTo(Temporada::class);
    }
}
