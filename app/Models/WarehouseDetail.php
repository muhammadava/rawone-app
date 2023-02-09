<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseDetail extends Model {
    use HasFactory;
    protected $table = 'warehouse_details';
    public $timestamps = false;
    protected $fillable = [
        'warehouses_id', 'price'
    ];

    public function warehouses() {
        return $this->belongsTo( Warehouse::class, 'warehouses_id', 'id' );
    }
}
