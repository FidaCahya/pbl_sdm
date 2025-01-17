<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_jabatan_kegiatan', function (Blueprint $table) {
            $table->id('jabatan_id');
            $table->string('jabatan_kode');
            $table->string('jabatan');
            $table->decimal('poin', 2, 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_jabatan_kegiatan');
    }
};
