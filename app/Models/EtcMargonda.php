<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ExtraMargonda;

class EtcMargonda extends Model {
    use HasFactory;
    protected $table = 'etc_margonda';
    public $timestamps = false;

    public function ExtraMargonda() {
        return $this->belongsTo( ExtraMargonda::class );
    }
}
