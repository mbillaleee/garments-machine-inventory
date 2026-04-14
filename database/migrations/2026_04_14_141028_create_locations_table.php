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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('factory_id')->nullable();

            $table->string('floor')->nullable(); // Floor (e.g: 1st Floor, Ground)
            $table->string('location_name'); // Location Name
            $table->string('location_type'); // Location Type (e.g: Store, Office)

            $table->integer('sort_sequence')->default(0); // Sorting order

            $table->enum('status', [1, 0])->default('1'); // Active/Inactive

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
        Schema::dropIfExists('locations');
    }
};
