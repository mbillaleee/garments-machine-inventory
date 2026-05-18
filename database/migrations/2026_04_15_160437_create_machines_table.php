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
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            
            $table->string('machine_inventory_number')->unique();           // Machine Inventory Number
            $table->string('serial_number')->nullable();                     // Serial Number
            $table->date('purchase_date');                                   // Purchase Date
            $table->date('service_date')->nullable();                        // Service Date
            $table->unsignedBigInteger('machine_type_id')->nullable();         // Machine Type (dropdown)
            $table->unsignedBigInteger('brand_id')->nullable();               // Brand (dropdown)
            $table->unsignedBigInteger('model_id')->nullable();               // Model (dropdown)
            $table->text('reason_for_purchase')->nullable();                 // Reason For Purchase

            // Right side fields
            $table->decimal('machine_value', 15, 2)->nullable();             // Machine Value($)
            $table->unsignedBigInteger('supplier_id')->nullable();           // Supplier (dropdown)
            $table->unsignedBigInteger('needle_type_id')->nullable();        // Needle Type (dropdown)
            $table->integer('depreciation')->nullable();                     // Depreciation (Years)
            $table->integer('service_frequency')->nullable();                // Service Frequency (Days)
            $table->integer('guarantee_period')->nullable();                 // Guarantee Period (year)
            $table->unsignedBigInteger('location_id')->nullable();            // Location (dropdown)
            $table->string('stitch_formation')->nullable();                  // Stitch Formation (dropdown)
            $table->unsignedBigInteger('department_id');                      // Department (required)
            
            // Extra fields from 2nd image
            $table->string('ownership')->nullable();                         // Ownership (dropdown)
            $table->unsignedBigInteger('factory_id')->nullable();
            $table->string('status')->nullable();                            // Machine Status (dropdown)
            $table->unsignedBigInteger('added_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->timestamps();
             $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machines');
    }
};
