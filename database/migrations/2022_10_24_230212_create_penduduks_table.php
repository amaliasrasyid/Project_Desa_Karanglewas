<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('NIK')->unique();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telpon');
            $table->string('tptLahir');
            $table->date('tglLahir');
            $table->boolean('kelamin');
            $table->string('kawin');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('noAkta')->unique();
            $table->boolean('pam');
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
        Schema::dropIfExists('penduduks');
    }
}
