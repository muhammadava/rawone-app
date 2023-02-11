<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Market;
use App\Models\Outlet;
use App\Models\Warehouse;
use App\Models\MarketDetail;
use App\Models\OutletDetail;
use App\Models\WarehouseDetail;

class Reports extends Model {
    use HasFactory;
    protected $table = 'reports';
    public $timestamps = false;
    protected $fillable = [
        'markets_id', 'outlets_id', 'warehouses_id', 'market_details_id', 'outlet_details_id', 'warehouse_details_id'
    ];

    public function markets() {
        return $this->hasOne( Market::class, 'markets_id' );
    }

    public function outlets() {
        return $this->hasOne( Outlet::class, 'outlets_id' );
    }

    public function warehouses() {
        return $this->hasOne( Warehouse::class, 'warehouses_id' );
    }

    public function marketdetails() {
        return $this->hasOne( MarketDetail::class, 'market_details_id' );
    }

    public function outletdetails() {
        return $this->hasOne( OutletDetail::class, 'outlet_details_id' );
    }

    public function warehousedetails() {
        return $this->hasOne( WarehouseDetail::class, 'warehouse_details_id' );
    }
}
