<?php

namespace App\Models;

use App\Models\Dusun;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPenduduk extends Model
{
    use HasFactory;

    protected $table = 'datapenduduk';

    public $timestamps = false;

    public function dusun()
    {
        return $this->belongsTo(Dusun::class);
    }
}
