<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    use HasFactory;
    protected $fillable = ['numero'];
    public $timestamps = false;

    public function temporadas()
    {
        return $this->belongsTo(Temporada::class);
    }
}
