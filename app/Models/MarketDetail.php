<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Market;

class MarketDetail extends Model {
    use HasFactory;
    protected $table = 'market_details';
    public $timestamps = false;
    protected $fillable = [
        'market_date', 'market_price'
    ];

    public function markets() {
        return $this->belongsTo( Market::class, 'markets_id', 'id' );
    }
}
