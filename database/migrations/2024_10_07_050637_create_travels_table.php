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
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('head');
            $table->string('price');
            $table->string('days');
            $table->string('title');
            $table->string('details');
            $table->string('month');
            $table->string('image');
            $table->string('information');
            $table->string('plan');
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travels');
    }
};
