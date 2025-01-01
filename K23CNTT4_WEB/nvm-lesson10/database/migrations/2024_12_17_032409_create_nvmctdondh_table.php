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
        Schema::create('nvmctdondh', function (Blueprint $table) {
            //$table->id();
           // $table->timestamps();
            $table->string('nvmSoDH');
            $table->string('nvmMaVTu');
            $table->string('nvmSLDat');
            $table->foreign('nvmMaVTu')->references('nvmMaVTu')->on('nvmvattu');
            $table->foreign('nvmSoDH')->references('nvmSoDH')->on('nvmdondh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvmctdondh');
    }
};
