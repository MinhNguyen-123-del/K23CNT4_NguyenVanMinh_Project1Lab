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
        Schema::create('nvm_ct_hoa_don', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nvmHoaDonID')->references('id')->on('nvm_hoa_don');
            $table->bigInteger('nvmSanPhamID')->references('id')->on('nvm_san_pham');
            $table->Integer('nvmSoLuongMua');
            $table->float('nvmDonGiaMua');
            $table->float('nvmThanhTien');
            $table->tinyInteger('nvmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvm_ct_hoa_don');
    }
};
