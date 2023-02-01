<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model {
    use HasFactory;
    protected $fillabel = [
        'name'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guarded = [];
    public function marketdetails() {
        return $this->hasMany( market_details::class, 'markets_id' );
    }
}
