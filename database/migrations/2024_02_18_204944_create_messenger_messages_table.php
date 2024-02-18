<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messenger_messages', static function (Blueprint $table) {
            $table->uuid('id');
            $table->bigInteger('from_id');
            $table->bigInteger('to_id');
            $table->text('message')->nullable();
            $table->string('attachment')->nullable();
            $table->boolean('seen');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::hasTable('messenger_messages');
    }
};
