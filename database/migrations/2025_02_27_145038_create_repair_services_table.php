<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('repair_services', function (Blueprint $table) {
            $table->foreignId('repair_id')->constrained('repair_list')->onDelete('cascade');
            $table->foreignId('service_id')->constrained('service_list')->onDelete('cascade');
            $table->float('fee')->default(0);
            $table->boolean('status')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('repair_services');
    }
};