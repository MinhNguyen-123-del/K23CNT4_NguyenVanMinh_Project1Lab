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
        Schema::create('nvm_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('nvmMaSanPham',255)->unique();
            $table->string('nvmTenSanPham',255);
            $table->string('nvmHinhAnh',255);
            $table->integer('nvmSoLuong');
            $table->float('nvmDonGia');
            $table->bigInteger('nvmMaLoai')->references('id')->on('nvm_loai_san_pham');
            $table->tinyInteger('nvmTrangThai');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvm_san_pham');
    }
};
