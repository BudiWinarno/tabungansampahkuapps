<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSampah extends Model
{
    use HasFactory;

    protected $table = 'jenis_sampah';

    protected $fillable = [
        'nama',
        'satuan',
        'harga',
        'harga_pengepul',
        'keterangan',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
        'harga_pengepul' => 'decimal:2',
    ];
}
