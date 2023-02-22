<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ExtraMargonda;

class Transaction extends Model {
    use HasFactory;
    protected $table = 'transactions';
    public $timestamps = true;
    protected $fillable = [
        'cash_deposit', 'cash', 'edc', 'goresto', 'gopay', 'grabfood', 'ovo', 'shopeefood'
    ];

    public function ExtraMargonda() {
    	return $this->belongsTo(ExtraMargonda::class);
    }
}
