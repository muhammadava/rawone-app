<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketDetail extends Model {
    use HasFactory;
    protected $fillabel = [
        'markets_id', 'price', 'qty'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guarded = [];
    public function markets() {
        return $this->belongsTo( markets::class, 'markets_id', 'id' );
    }
}
