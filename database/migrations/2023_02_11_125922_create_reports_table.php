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
            $table->foreignId( 'outlets_id' )
                ->constrained( 'outlets' )
                ->onDelete( 'cascade' );
            $table->foreignId( 'warehouses_id' )
                ->constrained( 'warehouses' )
                ->onDelete( 'cascade' );
            $table->foreignId( 'market_details_id' )
                ->constrained( 'market_details' )
                ->onDelete( 'cascade' );
            $table->foreignId( 'outlet_details_id' )
                ->constrained( 'outlet_details' )
                ->onDelete( 'cascade' );
            $table->foreignId( 'warehouse_details_id' )
                ->constrained( 'warehouse_details' )
                ->onDelete( 'cascade' );
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
