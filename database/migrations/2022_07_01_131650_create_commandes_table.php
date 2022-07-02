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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->unique();
            $table->integer('nombreColis');
            $table->float('poids');
            $table->string('lieuDepart');
            $table->string('lieuDestination');
            $table->string('Description');
            $table->string('uploadPhoto');
            $table->foreignId('client_id');
            $table->foreignId('livreur_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('commandes');
    }
};
