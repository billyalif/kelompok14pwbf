<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_user', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 40);
            $table->string('alamat', 50);
            $table->string('email', 50);
            $table->string('telp', 13);
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->timestamps();
        });

        Schema::table('tabel_user', function (Blueprint $table) {
            $table->foreignId('id_kota')->constrained('tabel_kota');
            $table->foreignId('id_role')->constrained('tabel_role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_user');
    }
}
