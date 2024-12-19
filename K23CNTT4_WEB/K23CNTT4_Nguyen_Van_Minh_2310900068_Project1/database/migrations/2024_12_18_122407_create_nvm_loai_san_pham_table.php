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
        Schema::create('nvm_loai_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('nvmMaLoai',255)->unique();
            $table->string('nvmTenLoai',255);
            $table->tinyInteger('nvmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvm_loai_san_pham');
    }
};
