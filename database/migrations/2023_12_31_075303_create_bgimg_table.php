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
        Schema::create('bgimg', function (Blueprint $table) {
            $table->id();
            $table->string('homebg');
            $table->string('aboutbg');
            $table->string('offerbg');
            $table->string('contactbg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bgimg');
    }
};
