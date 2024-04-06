<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prato', function (Blueprint $table) {
            $table->id();
            $table->text('nome',255);
            $table->decimal('preco', 8, 2);
            $table->unsignedBigInteger('cardapio_id');
            $table->foreign('cardapio_id')->references('id')->on('cardapio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prato');
    }
};
