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
        Schema::create('devolucion', function (Blueprint $table) {
            $table->id('id_devolucion');
            $table->timestamp('fecha_devolucion');
            $table->string('motivo_devolucion');
            $table->decimal('total_devolucion',10,2);


            $table->unsignedBigInteger('fk_usuario');
            $table->foreign('fk_usuario')->references('id_usuario')->on('usuario');
            
            $table->unsignedBigInteger('fk_pedido');
            $table->foreign('fk_pedido')->references('id_pedido')->on('pedido');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devolucion');
    }
};
