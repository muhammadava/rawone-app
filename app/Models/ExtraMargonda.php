<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraMargonda extends Model {
    use HasFactory;
    protected $table = 'extra_margonda';
    protected $guarded = [];
    public $timestamps = true;
    protected $fillable = [
        'extramargonda_date', 'gas', 'parking', 'gs_id', 'gs_price', 'utility_id', 'utility_price', 'adm_id', 'adm_price', 'etc_id', 'etc_price', 'total'
    ];

    public function gsMargonda() {
        return $this->hasOne( 'App\GsMargonda' );
    }

    public function utilityMargonda() {
        return $this->hasOne( 'App\UtilityMargonda' );
    }

    public function admMargonda() {
        return $this->hasOne( 'App\AdmMargonda' );
    }

    public function etcMargonda() {
        return $this->hasOne( 'App\EtcMargonda' );
    }

    public function getCreatedAttribute(){
        return $this->attributes['created_at'];
    }
}
