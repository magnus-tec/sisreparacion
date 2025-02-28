<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_list', function (Blueprint $table) {
            $table->id();
            $table->text('service');
            $table->text('description');
            $table->float('cost')->default(0);
            $table->boolean('delete_flag')->default(0)->comment('0 = Active, 1 = Delete');
            $table->timestamp('date_created')->useCurrent();
            $table->dateTime('date_updated')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_list');
    }
};