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
        Schema::create('compra', function (Blueprint $table) {
            $table->id('id_compra');
            $table->string('nombre_compra');
            $table->decimal('precio_compra',10,2);
            $table->decimal('total_compra',10,2);
            $table->timestamp('fechaEntrada_compra');

            $table->unsignedBigInteger('fk_proveedor');
            $table->foreign('fk_proveedor')->references('id_proveedor')->on('proveedor'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra');
    }
};
