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
        Schema::create('nvmctpnhap', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nvmSoPn')->primary;
            $table->string('nvmMaVTu');
            $table->string('nvmSLNhap');
            $table->float('nvmDGNhap',);
            $table->foreign('nvmMaVTu')->references('nvmMaVTu')->on('nvmvattu');
            $table->foreign('nvmSoPn')->references('nvmSoPn')->on('nvmpnhap');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvmctpnhap');
    }
};
