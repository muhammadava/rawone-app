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
        Schema::create('warehouse_costs', function (Blueprint $table) {
            $table->id();
            $table->date( 'date' );
            $table->integer( 'blade_gasoline' );
            $table->integer( 'spacy_petrol' );
            $table->integer( 'milling_machine_gasoline' );
            $table->integer( 'car_gasoline' );
            $table->integer( 'parking' );
            $table->longText( 'information' );
            $table->integer( 'adm' );
            $table->integer( 'utility' );
            $table->longText( 'etc' );
            $table->longText( 'information_etc' );
            $table->integer( 'total' );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('warehouse_costs');
    }
};
