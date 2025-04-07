<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('evaluers', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('client_id');
        $table->unsignedBigInteger('plat_id');
        $table->text('commentaire');
        $table->tinyInteger('note')->nullable(); 
        $table->timestamps();

        $table->foreign('client_id')->references('id')->on('clients');
        $table->foreign('plat_id')->references('id')->on('plats');
    });
}

};
