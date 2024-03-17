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
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('参加者ID');
            $table->bigInteger('number_of_lessons_id')->comment('開催ID');
            $table->string('name', 60)->comment('参加者名');
            $table->string('address', 240)->nullable()->comment('住所');
            $table->string('phone_number',41)->nullable()->comment('電話番号');
            $table->string('mail_address',254)->nullable()->comment('メールアドレス');
            $table->string('memo', 240)->nullable()->comment('メモ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
