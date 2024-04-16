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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('slug')->unique();
            $table->text('short_description')->fulltext();
            $table->text('description')->fulltext();
            $table->string('url')->nullable();
            $table->string('github')->nullable();
            $table->json('images')->nullable();
            $table->timestamp("published_at")->index()->nullable();
            $table->timestamp("started_at");
            $table->timestamp("ended_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
