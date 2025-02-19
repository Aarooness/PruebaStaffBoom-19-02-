<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // ID autoincremental
            
            $table->string('id_cliente'); //
            $table->string('productos');//
            $table->string('total'); 
        });
    }

    public function down() {
        Schema::dropIfExists('tasks'); // Para eliminar la tabla si se hace rollback
    }
};