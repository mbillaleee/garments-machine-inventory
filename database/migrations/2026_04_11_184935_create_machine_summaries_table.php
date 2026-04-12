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
        Schema::create('machine_summaries', function (Blueprint $table) {
            $table->id();
            
            // Left Column Fields
            $table->string('machine_inventory_number')->nullable();
            $table->string('machine_control_box_no')->nullable();
            $table->string('serial_number')->nullable();
            $table->date('purchase_date')->nullable();
            $table->date('service_date')->nullable();
            $table->string('machine_type')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->text('reason_for_purchase')->nullable();

            // Right Column Fields
            $table->string('machine_value_name')->nullable();           // Machine Value($) Name
            $table->decimal('machine_value', 15, 2)->nullable();        // Machine Value($)
            $table->decimal('machine_value_per_day', 15, 2)->nullable(); // Machine Value($) per Day
            $table->string('supplier')->nullable();
            $table->string('needle_type')->nullable();
            $table->integer('depreciation_years')->nullable();          // Depreciation (Years)
            $table->integer('service_frequency_days')->nullable();      // Service Frequency (Days)
            $table->integer('guarantee_period_years')->nullable();      // Guarantee Period (year)
            $table->string('location')->nullable();
            $table->string('stitch_formation')->nullable();
            $table->string('department')->nullable();
            $table->string('ownership')->nullable();                    // Ownership (e.g., Factory)
            $table->string('factory')->nullable();                      // Factory (e.g., TEAM GROUP)

            $table->unsignedBigInteger('added_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machine_summaries');
    }
};
