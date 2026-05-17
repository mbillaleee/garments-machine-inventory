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
            $table->string('machine_type')->nullable();                      // Machine Type (dropdown)
            $table->string('brand')->nullable();                             // Brand (dropdown)
            $table->string('model')->nullable();                             // Model (dropdown)
            $table->text('reason_for_purchase')->nullable();                 // Reason For Purchase

            // Right side fields
            $table->decimal('machine_value', 15, 2)->nullable();             // Machine Value($)
            $table->string('supplier')->nullable();                          // Supplier (dropdown)
            $table->string('needle_type')->nullable();                       // Needle Type (dropdown)
            $table->integer('depreciation')->nullable();                     // Depreciation (Years)
            $table->integer('service_frequency')->nullable();                // Service Frequency (Days)
            $table->integer('guarantee_period')->nullable();                 // Guarantee Period (year)
            $table->string('location')->nullable();                          // Location (dropdown)
            $table->string('stitch_formation')->nullable();                  // Stitch Formation (dropdown)
            $table->string('department')->nullable(false);                   // Department (required)
            
            // Extra fields from 2nd image
            $table->string('ownership')->nullable();                         // Ownership (dropdown)
            $table->string('factory')->nullable();

            $table->string('status')->nullable();                   // Machine Status (dropdown)
            $table->bigInteger('added_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->bigInteger('deleted_by')->nullable();

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
