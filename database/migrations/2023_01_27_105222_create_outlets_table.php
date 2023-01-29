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
        Schema::create('outlets', function (Blueprint $table) {
            $table->id();
            $table->integer( 'times_id' );
            $table->integer( 'outlets_id' );
            $table->enum( 'name', [ 'telur_ayam', 'es_batu', 'roti', 'roti_tawar', 'freshmilk' ] );
            $table->integer( 'price' );
            $table->integer( 'qty' );
            $table->dateTime( 'date_time' );
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outlets');
    }
};
