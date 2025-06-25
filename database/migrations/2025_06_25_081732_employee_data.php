<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employeeData', function (Blueprint $table) {
            $table->id();
            $table->string('empID')->unique();         // employee identifier
            $table->string('lname');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('status', 10)->nullable();
            $table->string('currentAdd', 500)->nullable();
            $table->string('permanentAdd', 500)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('positionID')->nullable();
            $table->string('plantillaNo')->nullable();
            $table->string('empStatusID')->nullable();
            $table->string('dateEmployed')->nullable();
            $table->string('last_appointment')->nullable();
            $table->string('officeID')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employeeData');
    }
};
