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
            $table->foreignId('subject_id') -> constrained() -> cascadeOnDelete();
            $table->foreignId('course_id') -> constrained() -> cascadeOnDelete();
            $table->foreignId('grade_id') -> constrained() -> cascadeOnDelete();
            $table->string('name');
            $table->integer('age');
            $table->text('gender');
            $table->text('image');
            
            $table->text('address');
            $table->text('gmail');
            $table->timestamps();
        });
    }

    /**
     * ababbshdbhdsds
     * dhsddjhjdsdd
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
