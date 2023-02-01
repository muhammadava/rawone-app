<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutletDetail extends Model {
    use HasFactory;
    protected $fillabel = [
        'outlets_id', 'price', 'qty'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guarded = [];
    public function outlets() {
        return $this->belongsTo( outlets::class, 'outlets_id', 'id' );
    }
}
