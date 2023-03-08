<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GsMargonda extends Model {
    use HasFactory;
    protected $table = 'gs_margonda';
    protected $guarded = [];
    public $timestamps = true;

    public function extraMargonda() {
        return $this->belongsTo( 'App\ExtraMargonda' );
    }
}
