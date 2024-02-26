<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            
            // Доработка-1 изменить default('') на nullable() 
            $table->string('title')->nullable(); // Название группы
            
            $table->date('start_from'); //Дата начала обучения
            $table->boolean('is_active'); // Начала ли группа свое обучение
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
