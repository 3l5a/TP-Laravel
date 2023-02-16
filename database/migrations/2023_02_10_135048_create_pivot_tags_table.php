<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_tags', function (Blueprint $table) { //apres creation de la table many to many 
            $table->unsignedBigInteger('jeu_id');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('jeu_id')->references('id')->on('jeux')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->primary(['jeu_id', 'tag_id']); //rend ces deux clés (jeu_id et tag_id) primaires
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_tags');
    }
};
