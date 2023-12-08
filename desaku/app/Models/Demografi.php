<?php

namespace App\Models;

use App\Models\Dusun;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demografi extends Model
{

    protected $table = "demografi";

    protected $fillable = [
        'nama_dusun',
        'jumlah_KK',
        'jumlah_laki_laki',
        'jumlah_perempuan',
        'total_jiwa'
    ];

    public function dusun()
    {
        return $this->belongsTo(Dusun::class);
    }
}
