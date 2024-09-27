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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id(); 
            $table->string('business_name'); 
            $table->string('email')->unique(); 
            $table->string('licence');
            $table->string('address'); 
            $table->string('website')->nullable(); 
            $table->text('description')->nullable(); 
            $table->time('opening_hour'); 
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
        Schema::dropIfExists('businesses');
    }
};
