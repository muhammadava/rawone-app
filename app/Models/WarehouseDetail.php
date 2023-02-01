<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseDetail extends Model {
    use HasFactory;
    protected $fillabel = [
        'warehouses_id', 'price', 'qty'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guarded = [];
    public function warehouses() {
        return $this->belongsTo( warehouses::class, 'warehouses_id', 'id' );
    }
}
