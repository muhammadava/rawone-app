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
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->integer( 'times_id' );
            $table->integer( 'warehouses_id' );
            $table->enum( 'name', [ 'kuah_rawon', 'daging', 'dengkul' ] );
            $table->integer( 'price' );
            $table->integer( 'qty' );
            $table->dateTime( 'date_time' );
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
};
