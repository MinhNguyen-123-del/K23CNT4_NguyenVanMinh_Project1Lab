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
        Schema::create('vattu', function (Blueprint $table) {
            //$table->id();
            $table->string('nvmMaVTu')->primary;
            $table->string('nvmTenVTu')->unique();
            $table->string('nvmDvTinh');
            $table->float('nvmPhanTram');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vattu');
    }
};
