<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
        'cash_deposit', 'cash', 'edc', 'goresto', 'gopay', 'grabfood', 'ovo', 'shopeefood'
    ];

    protected $touches = ['last_updated'];
    
    public function last_updated() {
        return $this->belongsTo(self::class, 'id')->latest();
    }
}
