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
        // warehousedaily untuk laporan sales gudang.
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer( 'times_id' );
            $table->enum( 'name', [ 'market', 'outlet', 'warehouse', 'margonda', 'kelapa_gading', 'simatupang', 'warehouse_daily', 'sales' ] );
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('categories');
    }
};
