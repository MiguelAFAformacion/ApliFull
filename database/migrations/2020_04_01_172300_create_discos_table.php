<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discos', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo_id');
            $table->String('nombre', 50)->comment('Este es el nombre del disco');
            $table->integer('anoSalida');
            $table->decimal('pvp', 8, 2);
            $table->integer('numCanciones');
            $table->enum('formato', ['Fonógrafo', 'Vinilo', 'Casete', 'CD', 'mp3', 'Streaming']);
            $table->text('descripcion')->nullable();
            $table->String('foto', 100)->nullable();
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
        Schema::dropIfExists('discos');
    }
}
