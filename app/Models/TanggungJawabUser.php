<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanggungJawabUser extends Model
{

    protected $table = 'tanggung_jawab_users';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'nama_tanggung_jawab'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

