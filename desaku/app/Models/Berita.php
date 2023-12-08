<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = "berita";

    protected $fillable = [
        'judulberita', 'deskripsi'
    ];
}
