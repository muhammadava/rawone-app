<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseShopping extends Model {
    use HasFactory;
    protected $table = 'warehouse_shopping';
    public $timestamps = false;
    protected $fillable = [
        'supplier/market', 'cash', 'total_cash', 'totals'
    ];
}
