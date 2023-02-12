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
            $table->string( 'market_price' )->nullable();

            $table->foreignId( 'outlets_id' )
                ->constrained( 'outlets' )
                ->onDelete( 'cascade' );
            $table->string( 'outlet_price' )->nullable();

            $table->foreignId( 'warehouses_id' )
                ->constrained( 'warehouses' )
                ->onDelete( 'cascade' );
            $table->string( 'warehouse_price' )->nullable();
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
