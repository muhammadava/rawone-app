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

    public static function calculateMTD($total) {
        $previous = self::latest()->first(); // mengambil record terakhir
        $previousMTD = $previous ? $previous->mtd : 0; // mengambil nilai field mtd pada record terakhir, jika tidak ada record sebelumnya, gunakan nilai 0
        $newMTD = $previousMTD + $total + request('total'); // menghitung nilai mtd yang baru dengan menambahkan nilai field mtd pada record baru dan nilai field total pada record baru

        return $newMTD; // mengembalikan hasil perhitungan  

        // Penjumlahan yang lama
        // $total = request('total'); // mengambil nilai field total dari input form
        // return $previousMTD + $total; // mengembalikan hasil penjumlahan
    }
}
