<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OutletDetail;

class Outlet extends Model {
    use HasFactory;
    protected $table = 'outlets';
    public $timestamps = false;
    protected $fillable = [
        'outlet_name'
    ];

    public function outletdetails() {
        return $this->hasMany( OutletDetail::class, 'outlets_id' );
    }
}
