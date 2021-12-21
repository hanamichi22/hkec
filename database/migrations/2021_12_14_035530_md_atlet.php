<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MdAtlet extends Migration
{
    protected $connection = 'pgsql';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('md_atlet', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('id_country',10);
            $table->string('Group',10);
            $table->string('continet',10);
            $table->string('city',20);
            $table->enum('gender', ['Male','Female','Other']);
            $table->string('photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('md_atlet');
    }
}
