<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->String('nombre', 50)->comment('Este es el nombre del grupo');
            $table->integer('anoFormacion');
            $table->enum('genero', ['Rock', 'Pop', 'Folk', 'Clásica', 'Reggae', 'Disco', 'Electrónica']);
            $table->String('pais', 40);
            $table->boolean('activo');
            $table->text('descripcion')->nullable();
            $table->String('email', 50)->unique();
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
        Schema::dropIfExists('grupos');
    }
}
