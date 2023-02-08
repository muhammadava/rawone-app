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
            $table->string( 'warehouse_number' )->nullable();
            $table->enum( 'name', [ 'kuah_rawon', 'dengkul', 'daging' ] );
            $table->string( 'price' )->nullable();
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
        Schema::dropIfExists('warehouses');
    }
};
