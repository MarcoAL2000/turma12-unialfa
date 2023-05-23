<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    use HasFactory;
    protected $fillable = ['numero'];

    public function Episodio()
    {
        return $this->hasMany(Episodio::class, 'temporada_id');
    }
}
