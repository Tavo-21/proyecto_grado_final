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
        Schema::create('pedido', function (Blueprint $table) {
            $table->id('id_pedido');
            $table->string('direccion_pedido');
            $table->timestamp('fecha_pedido');
            $table->decimal('total_pedido',10,2);
            $table->string('observaciones_pedido');

            $table->unsignedBigInteger('fk_usuario');
            $table->foreign('fk_usuario')->references('id_usuario')->on('usuario');
            
            $table->unsignedBigInteger('fk_producto');
            $table->foreign('fk_producto')->references('id_producto')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
