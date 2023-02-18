<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraMargonda extends Model {
    use HasFactory;
    protected $table = 'extra_margonda';
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'date', 'gas', 'parking', 'gs_id', 'gs_price', 'utility_id', 'utility_price', 'adm_id', 'adm_price', 'etc_id', 'etc_price', 'total', 'mtd'
    ];
}
