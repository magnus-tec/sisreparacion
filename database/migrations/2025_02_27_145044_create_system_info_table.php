<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('system_info', function (Blueprint $table) {
            $table->id();
            $table->text('meta_field');
            $table->text('meta_value');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('system_info');
    }
};