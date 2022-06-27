<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->String("intitule");
            $table->String("prefecture");
            $table->String("moe");
            $table->String("ville");
            $table->String("composantes");
            $table->String("mont_Invest");
            $table->String("annee");
            $table->String("superficie");
            $table->String("etat_Av");
            $table->text("desc");
            $table->String("mission");
            $table->String("images");

            // $table->unsignedBigInteger('categorie_id');
            // $table->foreign('categorie_id')->references('id')->on('categorie');

            $table->foreignId('categorie_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
