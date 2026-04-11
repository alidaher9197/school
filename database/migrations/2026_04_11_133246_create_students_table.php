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
            $table->string("first_name",20);
            $table->string("last_name",20);
            $table->string("father_name",20);
            $table->string("mother_name",20);
            $table->string("mother_last_name",20);
            $table->string("phone",20)->unique();
            $table->string("address");
            $table->date("birthdate");
            $table->string("password");
            $table->foreignId("gender_id")->constrained()->restrictOnDelete();
            $table->foreignId("nationality_id")->constrained()->restrictOnDelete();  
            $table->timestamps();
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
