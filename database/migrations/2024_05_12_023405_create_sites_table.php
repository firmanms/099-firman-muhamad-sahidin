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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('singkatan');
            $table->string('slug');
            $table->string('name_leader')->nullable();
            $table->string('image_leader')->nullable();
            $table->mediumText('greeting')->nullable();
            $table->string('video_profile')->nullable();
            $table->string('address')->nullable();
            $table->string('telp')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('logo')->nullable();
            $table->string('tw')->default('https://twitter.com/#');
            $table->string('fb')->default('https://facebook.com/#');
            $table->string('ig')->default('https://instagram.com/#');
            $table->string('tiktok')->default('https://tiktok.com/#');
            $table->string('yt')->default('https://youtube.com/#');
            $table->longText('maps')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
