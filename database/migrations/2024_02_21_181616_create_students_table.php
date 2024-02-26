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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            
            // Доработка-3 - Для внешних ключей указать ->cascadeOnDelete() или ->nullOnDelete()
            $table->unsignedBigInteger('group_id')->cascadeOnDelete()->nullable(); // ID группы // Внешний ключ для группы студента (foreign key)
            
            $table->string('surname')->nullable(); //default(''); // Фамилия студента
            $table->string('name')->nullable(); //default(''); // Имя студента            
            $table->timestamps();
            
            // Доработка-2 - Необязательно указывать имена для индекса и внешнего ключа, Ларавель сделает это сам
            //$table->index('group_id', 'student_gropu_idx');
            //$table->foreign('group_id', 'student_category_fk')->on('groups')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
