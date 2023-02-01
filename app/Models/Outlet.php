<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Outlet extends Model {
    use HasFactory;
    protected $fillabel = [
        'name'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guarded = [];
    public function outletdetails() {
        return $this->hasMany( outlet_details::class, 'outlets_id' );
    }
}
