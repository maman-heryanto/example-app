<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKegiatanModels extends Model
{
    use HasFactory;
    protected $table = 'laporan_kegiatan';
    protected $guarded = [];
}
