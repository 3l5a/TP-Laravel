<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    use HasFactory;

    protected $table = "jeux";
    protected $primaryKey = "id";
    protected $fillable = array('titre');
    public $timestamps = false;
    public function categorie()
    {
        return $this->belongsTo(Categorie::class); // on indique au modele qu'un jeu a plusieurs catégories, relation one to many
    }
    public function tags(){
        return $this->belongsToMany(Tag::class,'pivot_tags'); //relation many to many //this = jeu
    }
}
