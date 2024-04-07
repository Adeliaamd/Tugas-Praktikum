<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan';
    protected $premaryKey = 'id_jabatan';

    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}
