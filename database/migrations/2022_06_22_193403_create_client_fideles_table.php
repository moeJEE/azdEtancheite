<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientFidelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_fideles', function (Blueprint $table) {
            $table->id();
            $table->String('nom');
            $table->String('societe');
            $table->String('email');
            $table->String('telephone');
            $table->String('ville');
            $table->integer('totalDemandes')->nullable();
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
        Schema::dropIfExists('client_fideles');
    }
}
