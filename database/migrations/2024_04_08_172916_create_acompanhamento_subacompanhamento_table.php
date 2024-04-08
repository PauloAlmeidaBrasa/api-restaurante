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
        Schema::create('acompanhamento_subacompanhamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('acompanhamento_id');
            $table->foreign('acompanhamento_id')->references('id')->on('acompanhamento');
            $table->unsignedBigInteger('subacompanhamento_id');
            $table->foreign('subacompanhamento_id')->references('id')->on('subacompanhamento');
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
        Schema::dropIfExists('acompanhamento_subacompanhamento');
    }
};
