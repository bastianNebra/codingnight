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
        Schema::table('customers', function (Blueprint $table) {
            
            $table->renameColumn('telefon', 'phone_number');
            $table->dropColumn('reservertion_date');
            $table->dropColumn('number_places');
            $table->dropColumn('reservation_type');
            $table->dropColumn('own_reservation');
            $table->dropColumn('reservation_description');
            $table->dropColumn('rule');
            
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
