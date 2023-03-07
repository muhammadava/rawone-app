<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtilityMargonda extends Model {
    use HasFactory;
    protected $table = 'utility_margonda';
    public $timestamps = true;

    public function ExtraMargonda() {
        return $this->belongsTo( ExtraMargonda::class, 'utility_id' );
    }
}
