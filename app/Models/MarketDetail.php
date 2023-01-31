<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MarketDetail extends Model {
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function markets() {
        return view->belongsTo( markets::class, 'markets_id', 'id' );
    }
}
