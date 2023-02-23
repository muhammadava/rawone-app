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
        Schema::create('extra_margonda', function (Blueprint $table) {
            $table->id();
            $table->date( 'extramargonda_date' );
            $table->integer( 'gas' );
            $table->integer( 'parking' );

            $table->foreignId( 'gs_id' )
                ->constrained( 'gs_margonda' )
                ->onDelete( 'cascade' );
            $table->integer( 'gs_price' );

            $table->foreignId( 'utility_id' )
                ->constrained( 'utility_margonda' )
                ->onDelete( 'cascade' );
            $table->integer( 'utility_price' );

            $table->foreignId( 'adm_id' )
                ->constrained( 'adm_margonda' )
                ->onDelete( 'cascade' );
            $table->integer( 'adm_price' );
            
            $table->foreignId( 'etc_id' )
                ->constrained( 'etc_margonda' )
                ->onDelete( 'cascade' );
            $table->integer( 'etc_price' );
            $table->integer( 'total' );
            $table->integer( 'mtd' );

            // $table->foreignId( 'cash_deposit_id' )
            //     ->constrained( 'transactions' )
            //     ->onDelete( 'cascade' );
            // $table->foreignId( 'cash_id' )
            //     ->constrained( 'transactions' )
            //     ->onDelete( 'cascade' );
            // $table->foreignId( 'edc_id' )
            //     ->constrained( 'transactions' )
            //     ->onDelete( 'cascade' );
            // $table->foreignId( 'goresto_id' )
            //     ->constrained( 'transactions' )
            //     ->onDelete( 'cascade' );
            // $table->foreignId( 'gopay_id' )
            //     ->constrained( 'transactions' )
            //     ->onDelete( 'cascade' );
            // $table->foreignId( 'grabfood_id' )
            //     ->constrained( 'transactions' )
            //     ->onDelete( 'cascade' );
            // $table->foreignId( 'ovo_id' )
            //     ->constrained( 'transactions' )
            //     ->onDelete( 'cascade' );
            // $table->foreignId( 'shopeefood_id' )
            //     ->constrained( 'transactions' )
            //     ->onDelete( 'cascade' );
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('extra_margonda');
    }
};
