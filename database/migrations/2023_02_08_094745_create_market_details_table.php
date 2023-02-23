<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('market_details', function (Blueprint $table) {
            $table->id();
            $table->date( 'market_date' );
            $table->foreignId( 'markets_id' )
                ->constrained( 'markets' )
                ->onDelete( 'cascade' );
            $table->integer( 'market_price' );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('market_details');
    }
};
