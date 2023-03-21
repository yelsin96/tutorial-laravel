<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarea', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',60);
            $table->string('descripcion')->nullable();
            $table->tinyInteger('finalizada')->default(0);            
            $table->timestamp('fecha_limite');
            $table->tinyInteger('urgencia')->comment('0: no es urgente, 1:urgencia normal, 2:muy urgente');
            $table->softDeletes();
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
        Schema::dropIfExists('tarea');
    }
}
