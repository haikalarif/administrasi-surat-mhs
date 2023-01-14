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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('noSurat');
            $table->date('tglSurat');
            $table->date('tglTerima');
            $table->string('perihal');
            $table->foreignId('user_id');
            $table->enum('status', ['Di Proses', 'Di Terima', 'Di Tolak', 'Selesai'])->default('Di Proses');
            $table->string('jns_surat');
            $table->string('file_surat');
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
        Schema::dropIfExists('surats');
    }
};
