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
        Schema::create('nvm_khach_hang', function (Blueprint $table) {
            $table->id();
            $table->string('nvmMaKhachHang',255)->unique;
            $table->string('nvmHoTenKhachhang',255);
            $table->string('nvmEmail',255);
            $table->string('nvmMatKhau',255);
            $table->string('nvmDienThoai',255);
            $table->string('nvmDiaChi',255);
            $table->date('nvmNgayDangKy');
            $table->tinyInteger('nvmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvm_khach_hang');
    }
};
