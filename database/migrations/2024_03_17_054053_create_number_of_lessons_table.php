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
        Schema::create('number_of_lessons', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('開催ID');
            $table->bigInteger('class_id')->comment('教室ID');
            $table->bigInteger('participants_id')->comment('参加者ID');
            $table->string('lesson_title')->comment('開催タイトル');
            $table->boolean('is_payment')->comment('支払有無');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('number_of_lessons');
    }
};
