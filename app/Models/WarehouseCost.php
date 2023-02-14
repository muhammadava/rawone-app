<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseCost extends Model {
    use HasFactory;
    protected $table = 'warehouse_costs';
    public $timestamps = false;
    protected $fillable = [
        'blade_gasoline', 'spacy_petrol', 'milling_machine_gasoline', 'car_gasoline', 'parking', 'information', 'adm', 'utility', 'etc', 'information', 'total'
    ];
}
