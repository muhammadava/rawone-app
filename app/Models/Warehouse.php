<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WarehouseDetail;

class Warehouse extends Model {
    use HasFactory;
    protected $table = 'warehouses';
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    public function warehousedetails() {
        return $this->hasMany( WarehouseDetail::class, 'warehouses_id' );
    }
}
