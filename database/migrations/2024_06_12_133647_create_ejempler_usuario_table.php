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
        Schema::create('ejempler_usuario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ejempler_id')->nullable();
            $table->unsignedBigInteger('usuario_id')->nullable();

            $table->foreign('ejempler_id')
            ->references('id')
            ->on('ejemplers')->onDelete('cascade');

            $table->foreign('usuario_id')
            ->references('id')
            ->on('usuarios')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejempler_usuario');
    }
};
