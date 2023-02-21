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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer( 'cash_deposit' )->nullable()->default( 0 );
            $table->integer( 'cash' )->nullable()->default( 0 );
            $table->integer( 'edc' )->nullable()->default( 0 );
            $table->integer( 'goresto' )->nullable()->default( 0 );
            $table->integer( 'gopay' )->nullable()->default( 0 );
            $table->integer( 'grabfood' )->nullable()->default( 0 );
            $table->integer( 'ovo' )->nullable()->default( 0 );
            $table->integer( 'shopeefood' )->nullable()->default( 0 );
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
        Schema::dropIfExists('transactions');
    }
};
