<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regs', function (Blueprint $table) {
            $table->id();
            $table->string('sname');
            $table->string('fname');
            $table->string('gender');
            $table->string('age');
            $table->string('phoneNo');
            $table->string('email');
            $table->string('state');
            $table->string('lga');
            $table->string('state2');
            $table->string('lra');
            $table->string('pu');
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
        Schema::dropIfExists('regs');
    }
}
