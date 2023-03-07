<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GsMargonda extends Model {
    use HasFactory;
    protected $table = 'gs_margonda';
    public $timestamps = true;

    public function ExtraMargonda() {
        return $this->belongsTo( ExtraMargonda::class, 'gs_id' );
    }
}
