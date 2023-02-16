<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = "categorie";
    protected $primaryKey = "id";
    protected $fillable = ['libelle'];
    public $timestamps = false;
    public function jeux()
    {
        return $this->hasMany(Jeu::class); //on indique au modele qu'une catégorie a plusieurs jeux
    }
}
