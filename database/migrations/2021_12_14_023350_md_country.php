<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MdCountry extends Migration
{
    protected $connection = 'pgsql';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('md_country', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iso',2);
            $table->string('name',80);
            $table->string('nicename',80)->nullable();
            $table->string('iso3',3)->nullable();
            $table->string('numcode',6)->nullable();
            $table->string('phonecode',5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('md_country');
    }
}
