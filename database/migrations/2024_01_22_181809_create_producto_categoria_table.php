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
        Schema::create('producto_categoria', function (Blueprint $table) {
            $table->id('id_productoCategoria');

            $table->unsignedBigInteger('fk_producto');
            $table->foreign('fk_producto')->references('id_producto')->on('producto');
            
            $table->unsignedBigInteger('fk_categoria');
            $table->foreign('fk_categoria')->references('id_categoria')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_categoria');
    }
};
