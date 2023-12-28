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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('event_description');
            $table->date('event_date');
            $table->string('event_duration');
            $table->string('event_venue');
            $table->boolean('participation_certificate')->default(0);
            $table->boolean('winner_runner_certificate')->default(0);
            $table->boolean('cash_prize')->default(0);
            $table->string('registration_link');
            $table->string('poster_path');
            $table->string('event_status')->default('not_completed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
