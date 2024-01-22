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
        Schema::create('producto', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('nombre_producto');
            $table->string('descripcion_producto');
            $table->decimal('precio_producto',8,2);
            $table->string('imagen_producto');
            
            $table->unsignedBigInteger('fk_marca');
            $table->foreign('fk_marca')->references('id_marca')->on('marca');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
