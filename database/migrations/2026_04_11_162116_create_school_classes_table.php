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
        Schema::create('school_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("language_id")->constrained()->restrictOnDelete();
            $table->foreignId("certificate_id")->constrained()->restrictOnDelete();
            $table->foreignId("section_id")->constrained()->restrictOnDelete();
            $table->foreignId("department_id")->constrained()->restrictOnDelete();
            $table->string("room_number",10);
            $table->unsignedSmallInteger("number_of_students");
            $table->unsignedSmallInteger("max_number_of_students");
            $table->string("school_year",4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_classes');
    }
};
