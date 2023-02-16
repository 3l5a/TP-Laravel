<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = ['nom_tag'];
    public $timestamps = false;

    public function jeux() {
        return $this->belongsToMany(Jeu::class); //relation many to many
    }
}
