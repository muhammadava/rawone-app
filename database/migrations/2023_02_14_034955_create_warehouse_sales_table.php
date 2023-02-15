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
            $table->decimal( 'simatupang' );
            $table->decimal( 'margonda' );
            $table->decimal( 'kelapa_gading' );
            $table->decimal( 'etc' );
            $table->longText( 'information' );
            $table->decimal( 'gross_sales' )->default(0);
            $table->decimal( 'percent' );
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
