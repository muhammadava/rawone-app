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
        Schema::create('outlet_details', function (Blueprint $table) {
            $table->id();
            $table->date( 'date' );
            $table->foreignId( 'outlets_id' )
                ->constrained( 'outlets' )
                ->onDelete( 'cascade' );
            $table->integer( 'outlet_price' );
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
        Schema::dropIfExists('outlet_details');
    }
};
