<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBank extends Model
{
    use HasFactory;

    protected $table = 'master_banks';

    protected $fillable = [
        'kode',
        'nama',
        'deskripsi'
    ];
}
