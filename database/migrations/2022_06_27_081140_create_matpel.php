<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matpel', function (Blueprint $table) {
            $table->id();
            $table->string('bahasa_indonesia');
            $table->string('bahasa_inggris');
            $table->string('matematika');
            $table->string('ipa');
            $table->string('ips');
            $table->string('status')->default('aktif');
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
        Schema::dropIfExists('matpel');
    }
};
