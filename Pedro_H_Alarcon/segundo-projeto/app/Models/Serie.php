<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['name'];
    use HasFactory;

    public function temporadas()
    {
        return $this->hasMany(Temporada::class);
    }
}
