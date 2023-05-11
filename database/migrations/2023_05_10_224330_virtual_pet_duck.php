<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('virtual_pet_ducks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('hunger')->default(0);
            $table->integer('happiness')->default(100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('virtual_pet_ducks');
    }
};
