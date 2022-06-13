<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesures', function (Blueprint $table) {
            $table->id();
            $table->float('Epaule')->nullable();
            $table->float('Manche')->nullable();
            $table->float('Taille')->nullable();
            $table->float('Cuisse')->nullable();
            $table->float('Poitrine')->nullable();
            $table->float('Hanche')->nullable();
            $table->float('Bras')->nullable();
            $table->float('Dos')->nullable();
            $table->float('Jambe')->nullable();
            $table->float('Bassin')->nullable();
            $table->float('Ceinture')->nullable();
            $table->unsignedBigInteger('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('mesures');
    }
}
