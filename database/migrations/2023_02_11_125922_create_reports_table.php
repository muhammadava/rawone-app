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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId( 'user_id' )
                ->constrained( 'users' )
                ->onDelete( 'cascade' );
            $table->foreignId( 'markets_id' )
                ->constrained( 'markets' )
                ->onDelete( 'cascade' );
            $table->decimal( 'market_price', 6, 2 );

            $table->foreignId( 'outlets_id' )
                ->constrained( 'outlets' )
                ->onDelete( 'cascade' );
            $table->decimal( 'outlet_price', 6, 2 );

            $table->foreignId( 'warehouses_id' )
                ->constrained( 'warehouses' )
                ->onDelete( 'cascade' );
            $table->decimal( 'warehouse_price', 6, 2 );
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
        Schema::dropIfExists('reports');
    }
};
