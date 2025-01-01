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
        Schema::create('nvmtonkho', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nvmNamThang')->primary();
            $table->string('nvmMaVTu');
            $table->string('nvmSLDau');
            $table->string('nvmTongSLN');
            $table->string('nvmTongSLX');
            $table->string('nvmSLCuoi');
            $table->foreign('nvmMaVTu')->references('nvmMaVTu')->on('nvmvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvmtonkho');
    }
};
