<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanggungJawabUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'jenis_tanggung_jawab',
    ];
}
