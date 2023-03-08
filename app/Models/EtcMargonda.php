<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtcMargonda extends Model {
    use HasFactory;
    protected $table = 'etc_margonda';
    protected $guarded = [];
    public $timestamps = true;

    public function extraMargonda() {
        return $this->belongsTo( 'App\ExtraMargonda' );
    }
}
