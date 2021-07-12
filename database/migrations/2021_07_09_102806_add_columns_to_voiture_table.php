<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToVoitureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voitures', function (Blueprint $table) {
            $table->string('gamme');
            $table->integer('withdriver');
            $table->integer('tarifday');
            $table->integer('tarifhour');
            $table->boolean('disponible');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voitures', function (Blueprint $table) {
            $table->dropColumn('gamme');
            $table->dropColumn('withdriver');
            $table->dropColumn('tarifday');
            $table->dropColumn('tarifhour');
            $table->dropColumn('disponible');
        });
    }
}
