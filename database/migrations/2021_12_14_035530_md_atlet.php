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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('id_country',10);
            $table->string('Group',10)->nullable();
            $table->string('continent',10)->nullable();
            $table->string('city',20)->nullable();
            $table->enum('gender', ['Male','Female','Other'])->nullable();
            $table->string('photo')->nullable();
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
