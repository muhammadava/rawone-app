<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
    use HasFactory;
    protected $table = 'transactions';
    public $timestamps = false;
    protected $fillable = [
        'cash_deposit', 'cash', 'edc', 'goresto', 'gopay', 'grabfood', 'ovo', 'shopeefood'
    ];
}
