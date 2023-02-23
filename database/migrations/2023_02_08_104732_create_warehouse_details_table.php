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
        Schema::create('warehouse_details', function (Blueprint $table) {
            $table->id();
            $table->date( 'date' );
            $table->foreignId( 'warehouses_id' )
                ->constrained( 'warehouses' )
                ->onDelete( 'cascade' );
            $table->integer( 'warehouse_price' );
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
        Schema::dropIfExists('warehouse_details');
    }
};
