<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseSale extends Model {
    use HasFactory;
    protected $table = 'warehouse_sales';
    public $timestamps = false;
    protected $fillable = [
        'date', 'simatupang', 'margonda', 'kelapa_gading', 'etc', 'information', 'gross_sales', 'percent'
    ];
}
