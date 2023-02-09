<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MarketDetail;

class Market extends Model {
    use HasFactory;
    protected $table = 'markets';
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    public function marketdetails() {
        return $this->hasMany( MarketDetail::class, 'markets_id' );
    }
}
