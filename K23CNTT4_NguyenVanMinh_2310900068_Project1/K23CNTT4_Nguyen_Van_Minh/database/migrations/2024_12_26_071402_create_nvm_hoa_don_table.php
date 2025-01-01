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
        Schema::create('nvm_hoa_don', function (Blueprint $table) {
            $table->id();
            $table->string('nvmMaHoaDon',255)->unique();
            $table->bigInteger('nvmMaKhachHang')->references('id')->on('nvm_khach_hang');
            $table->date('nvmNgayHoaDon');
            $table->date('nvmNgayNhan');
            $table->string('HoTenKhachHang',255);
            $table->string('nvmEmail',255);
            $table->string('nvmDienThoai',255);
            $table->string('nvmDiaChi',255);
            $table->float('nvmTongTriGia');
            $table->tinyInteger('nvmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvm_hoa_don');
    }
};
