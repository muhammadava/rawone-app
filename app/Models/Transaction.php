<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\extraMargonda;

class Transaction extends Model {
    use HasFactory;
    protected $table = 'transactions';
    public $timestamps = true;
    protected $fillable = [
        'cash_deposit', 'cash', 'edc', 'goresto', 'gopay', 'grabfood', 'ovo', 'shopeefood'
    ];

    public function extraMargonda() {
    	return $this->belongsTo(extraMargonda::class, 'id');
    }
}
