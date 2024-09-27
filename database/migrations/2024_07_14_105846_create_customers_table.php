<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {  
            

            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('telefon');
            $table->date('reservertion_date');
            $table->integer('number_places');
            $table->enum('reservation_type', ['', 'hochzeit', 'geburtsdatum', 'teamtreffen', 'fussballspielschauen']);
            $table->string('own_reservation');
            $table->text('reservation_description');
            $table->string('rule')->default('customer');
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
        Schema::dropIfExists('customers');
    }
};
