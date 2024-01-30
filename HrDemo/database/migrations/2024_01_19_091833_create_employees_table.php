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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile_number');
            $table->string('email');
            $table->unsignedBigInteger('fk_department_id');
            $table->foreign('fk_department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('fk_designation_id')->default(0);
            $table->foreign('fk_designation_id')->references('id')->on('designations');
            $table->unsignedBigInteger('fk_role_id');
            $table->foreign('fk_role_id')->references('id')->on('roles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
