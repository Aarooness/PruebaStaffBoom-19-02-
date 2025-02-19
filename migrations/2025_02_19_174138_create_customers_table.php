<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // ID autoincremental
           
            $table->string('name'); //
            $table->string('email');//
            $table->string('phone'); 

            
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down() {
        Schema::dropIfExists('customers'); // Para eliminar la tabla si se hace rollback
    }
};