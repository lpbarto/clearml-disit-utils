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
        Schema::create('ondemand_logs', function (Blueprint $table) {
            $table->id();
            $table->string('serving_machine_task_id');
            $table->string('endpoint');
            $table->boolean('status');
            $table->text('details')->nullable();
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ondemand_logs');
    }
};
