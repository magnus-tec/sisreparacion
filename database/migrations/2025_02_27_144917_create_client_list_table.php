<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('client_list', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('contact', 100);
            $table->string('email');
            $table->text('address');
            $table->boolean('delete_flag')->default(0);
            $table->timestamp('date_created')->useCurrent();
            $table->dateTime('date_updated')->nullable();
            $table->string('documentid', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('client_list');
    }
};