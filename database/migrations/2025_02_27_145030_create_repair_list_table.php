<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('repair_list', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50);
            $table->foreignId('client_id')->constrained('client_list')->onDelete('cascade');
            $table->text('remarks')->nullable();
            $table->text('notes')->nullable();
            $table->float('total_amount')->default(0);
            $table->float('discount')->nullable()->default(0);
            $table->boolean('payment_status')->default(0)->comment('0= Unpaid, 1= paid');
            $table->tinyInteger('status')->default(0)->comment('0 = pending, 1= Approved, 2 = In-Progress, 3 = Checking, 4 = Done, 5= Cancelled');
            $table->timestamp('date_created')->useCurrent();
            $table->float('advance')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('repair_list');
    }
};