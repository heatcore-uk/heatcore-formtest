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
        Schema::create('hc_forms', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('first_name'); // Store first name
            $table->string('last_name'); // Store last name
            $table->string('address'); // Store address
            $table->string('phone_number'); // Store phone number
            $table->string('email')->unique(); // Store email (unique field)

            // Property details
            $table->enum('place', ['Street', 'District', 'City'])->nullable();
            $table->boolean('benefits_received')->nullable();
            $table->enum('residential_status', ['Owner', 'Renter', 'Other'])->nullable();
            $table->boolean('boiler_installed_before_2005')->nullable();
            $table->boolean('gas_meter_installed_before_2022')->nullable();
            $table->enum('heating_method', ['Gas', 'Electric', 'Oil', 'Other'])->nullable();

            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hc_forms');
    }
};
