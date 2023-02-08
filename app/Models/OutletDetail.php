<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutletDetail extends Model {
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'price'
    ];

    public function outlets() {
        return $this->belongsTo( Outlet::class, 'outlets_id', 'id' );
    }
}
