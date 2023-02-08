<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Market;

class MarketDetail extends Model {
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'price'
    ];

    public function markets() {
        return $this->belongsTo( Market::class, 'markets_id', 'id' );
    }
}
