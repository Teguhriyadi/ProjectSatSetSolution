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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid("id", 50)->primary();
            $table->string("title", 100);
            $table->string("slug", 150);
            $table->longText("content");
            $table->uuid("user_id", 50);
            $table->dateTime("published_at")->nullable();
            $table->enum("is_active", ["1", "0"])->default("1");
            $table->string("gambar")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
