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
            $table->foreignId( 'user_id' )
                ->constrained( 'users' )
                ->onDelete( 'cascade' );
            $table->date( 'date' );
            $table->integer( 'gas' );
            $table->integer( 'parking' );

            $table->foreignId( 'gs_id' )
                ->constrained( 'gs_margonda' )
                ->onDelete( 'cascade' );
            $table->integer( 'rp_gs' );

            $table->foreignId( 'utility_id' )
                ->constrained( 'utility_margonda' )
                ->onDelete( 'cascade' );
            $table->integer( 'rp_utility' );

            $table->foreignId( 'adm_id' )
                ->constrained( 'adm_margonda' )
                ->onDelete( 'cascade' );
            $table->integer( 'rp_adm' );
            
            $table->foreignId( 'etc_id' )
                ->constrained( 'etc_margonda' )
                ->onDelete( 'cascade' );
            $table->integer( 'rp_etc' );

            $table->integer( 'total' );
            $table->integer( 'mtd' );
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
        Schema::dropIfExists('extra_margonda');
    }
};
