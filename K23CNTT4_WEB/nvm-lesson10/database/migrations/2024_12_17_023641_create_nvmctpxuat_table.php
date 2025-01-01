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
        Schema::create('nvmctpxuat', function (Blueprint $table) {
           // $table->id();
           // $table->timestamps();
           $table->string('nvmSoPx')->primary();
           $table->string('nvmMaVTu');
           $table->string('SLXuat');
           $table->float('DGXuat');
           $table->foreign('nvmSoPx')->references('nvmSoPx')->on('nvmpxuat');
           $table->foreign('nvmMaVTu')->references('nvmMaVTu')->on('nvmvattu');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvmctpxuat');
    }
};
