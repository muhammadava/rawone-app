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
            $table->Integer( 'outlets_id' );
            $table->smallInteger( 'kat' )->comment( '1=pilihan 1, 2=pilihan 2, 3=pilihan 3' );
            $table->string( 'price' )->nullable();
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
