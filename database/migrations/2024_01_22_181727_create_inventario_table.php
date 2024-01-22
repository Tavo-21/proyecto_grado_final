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
        Schema::create('inventario', function (Blueprint $table) {
            $table->id('id_inventario');
            $table->integer('cantidad_inventario');
            $table->timestamp('fechaEntrada_inventario');

            $table->unsignedBigInteger('fk_producto');
            $table->foreign('fk_producto')->references('id_producto')->on('producto');

            $table->integer('stock_inventario');

            $table->unsignedBigInteger('fk_compra');
            $table->foreign('fk_compra')->references('id_compra')->on('compra');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventario');
    }
};
