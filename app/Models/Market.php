<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Market extends Model {
    use HasFactory, SoftDeletes;
    protected $hidden = [];
    public function marketdetails() {
        return $this->hasMany( market_details::class, 'markets_id' );
    }
}
