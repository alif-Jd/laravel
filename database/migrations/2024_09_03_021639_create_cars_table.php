<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   

    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('brand');
            $table->tinyInteger('seater');
            $table->float('price');
            $table->boolean('is_available')->default(true);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    
};