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
        Schema::create('nvm_quan_tri', function (Blueprint $table) {
            $table->id()->primary;
            $table->string('nvmTaiKhoan',225)->unique();
            $table->string('nvmMatKhau',225);
            $table->tinyInteger('nvmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvm_quan_tri');
    }
};
