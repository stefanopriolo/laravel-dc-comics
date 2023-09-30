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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string("title");
            $table->string("description");
            $table->string("image");
            $table->tinyInteger("price");
            $table->string("series");
            $table->date("sale_date");
            $table->string("type")->nullable();
            $table->string("artists")->nullable();
            $table->string("writers")->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
