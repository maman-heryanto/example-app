<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryawanModels extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $guarded = [];
}
