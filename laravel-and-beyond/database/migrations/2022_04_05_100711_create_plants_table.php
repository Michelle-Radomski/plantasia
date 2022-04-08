<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->default(1);
            $table->string('nickname');
            $table->string('official_name');
            $table->string('toxic');
            $table->string('light');
            $table->string('temperature');
            $table->string('humidity');
            $table->string('water');
            $table->string('plant_fertilizer');
            $table->string('soil');
            $table->string('misting');
            $table->string('repot');
            $table->string('air_purifying');
            // $table->string('plant_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plants');
    }
};
