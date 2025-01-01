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
        Schema::create('nvmvattu', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nvmMaVTu')->primary();
            $table->string('nvmTenVTu');
            $table->string('nvmDvTinh');
            $table->float('nvmPhanTram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvmvattu');
    }
};
