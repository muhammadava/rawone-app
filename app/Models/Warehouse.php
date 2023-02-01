<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model {
    use HasFactory;
    protected $fillabel = [
        'name'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guarded = [];
    public function warehousedetails() {
        return $this->hasMany( warehouse_details::class, 'warehouses_id' );
    }
}
