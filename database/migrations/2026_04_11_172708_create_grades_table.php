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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId("student_id")->constrained()->restrictOnDelete();
            $table->foreignId("subject_id")->constrained()->restrictOnDelete();
            $table->foreignId("teacher_id")->constrained()->restrictOnDelete();
            $table->foreignId("school_class_id")->constrained()->restrictOnDelete();
            $table->foreignId("term_id")->constrained()->restrictOnDelete();
            $table->unsignedSmallInteger("grade_value");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
