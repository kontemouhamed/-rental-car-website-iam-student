<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string('marque')->nullable();
            $table->string('modele')->nullable();
            $table->string('years')->nullable();
            $table->string('carburant')->nullable();
            $table->string('kilometrage')->nullable();
            $table->string('category')->nullable();
            $table->string('transmission')->nullable();
            $table->string('prix')->nullable();
            $table->string('etat')->nullable();
            $table->string('place')->nullable();
            $table->string('bestseller')->nullable();
            $table->string('image')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
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
        Schema::dropIfExists('voitures');
    }
}
