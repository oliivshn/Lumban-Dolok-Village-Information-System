<?php

namespace App\Models;

use App\Models\Demografi;
use App\Models\DataPenduduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dusun extends Model
{
    use HasFactory;
    protected $table = 'dusun';

    protected $fillable = [
        'nama',
    ];

    public function demografi()
    {
        return $this->hasMany(Demografi::class);
    }

    public function dataPenduduk()
    {
        return $this->hasMany(DataPenduduk::class);
    }
}
