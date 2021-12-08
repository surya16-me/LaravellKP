<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bengkels extends Model
{
    protected $fillable = [
        'nama','harga', 'jumlah', 'ket'
    ];
}
