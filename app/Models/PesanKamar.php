<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanKamar extends Model
{
    use HasFactory;
    protected $table = 'pesan_kamar';
    protected $guarded = ['id'];
}