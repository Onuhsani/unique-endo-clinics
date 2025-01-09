<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('clinic_id')->constrained('clinics')->deleteOnCascade(); // Foreign key for services
            $table->string('name');
            $table->string('email');
            $table->date('appointment_date'); // Appointment date
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'completed'])->default('pending'); // Appointment status
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
