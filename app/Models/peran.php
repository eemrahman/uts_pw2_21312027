<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    use HasFactory;
    protected $table ='peran';
    protected $fillable = ['film', 'cast', 'nama'];


    public function Film()
    {
        return $this->belongsTo(Film::class, 'film_id', "id");
    }

    public function Cast()
    {
        return $this->belongsTo(Cast::class, 'cast_id', "id");
    }
}
