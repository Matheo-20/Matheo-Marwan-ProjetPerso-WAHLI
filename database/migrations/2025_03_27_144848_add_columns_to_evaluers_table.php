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
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluers', function (Blueprint $table) {
            //
        });
    }
};
