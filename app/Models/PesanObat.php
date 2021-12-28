<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanObat extends Model
{
    use HasFactory;
    protected $table = 'pesan_obat';
    protected $guarded = [];
}