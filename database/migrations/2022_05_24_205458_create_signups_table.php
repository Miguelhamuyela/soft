<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signups', function (Blueprint $table) {
            $table->id();
            $table->string('idcard');
            $table->string('name');
            $table->string('country');
            $table->string('email');
            $table->string('photo');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('code');
            $table->string('status')->default('RECEBIDO');
            $table->string('category')->default('CONVIDADO');
            $table->softDeletes();
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
        Schema::dropIfExists('signups');
    }
}
