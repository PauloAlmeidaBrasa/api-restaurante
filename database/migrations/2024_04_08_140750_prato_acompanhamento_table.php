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
        Schema::create('prato_acompanhamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prato_id');
            $table->foreign('prato_id')->references('id')->on('prato');
            $table->unsignedBigInteger('acompanhamento_id');
            $table->foreign('acompanhamento_id')->references('id')->on('acompanhamento');
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
        Schema::dropIfExists('prato_acompanhamento');
    }
};
