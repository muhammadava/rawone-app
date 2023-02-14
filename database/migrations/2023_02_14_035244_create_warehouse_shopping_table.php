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
        Schema::create('warehouse_shopping', function (Blueprint $table) {
            $table->id();
            $table->date( 'date' );
            $table->string( 'supplier/market' );
            $table->integer( 'cash' );
            $table->integer( 'total_cash' );
            $table->integer( 'totals' );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('warehouse_shopping');
    }
};
