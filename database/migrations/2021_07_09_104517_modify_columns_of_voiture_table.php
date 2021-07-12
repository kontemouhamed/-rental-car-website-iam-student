<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnsOfVoitureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voitures', function (Blueprint $table) {
            $table->integer('years')->nullable()->change();
            $table->integer('kilometrage')->nullable()->change();
            $table->integer('prix')->nullable()->change();
            $table->integer('place')->nullable()->change();
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
            //
        });
    }
}
