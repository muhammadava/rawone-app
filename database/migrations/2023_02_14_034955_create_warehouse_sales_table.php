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
        Schema::create('warehouse_sales', function (Blueprint $table) {
            $table->id();
            $table->date( 'date' );
            $table->integer( 'simatupang' );
            $table->integer( 'margonda' );
            $table->integer( 'kelapa_gading' );
            $table->integer( 'etc' );
            $table->longText( 'information' );
            $table->integer( 'gross_sales' );
            $table->integer( 'percent' );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('warehouse_sales');
    }
};
