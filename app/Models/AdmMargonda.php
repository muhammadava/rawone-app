<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmMargonda extends Model {
    use HasFactory;
    protected $table = 'adm_margonda';
    public $timestamps = true;

    public function ExtraMargonda() {
        return $this->belongsTo( ExtraMargonda::class, 'adm_id' );
    }
}
