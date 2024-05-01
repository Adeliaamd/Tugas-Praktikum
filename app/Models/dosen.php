<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';
    protected $fillable = ['id_dosen', 'nip', 'nama', 'alamat', 'nama_jabatan'];
    public $timestamps = false;

    public function jabatan(){
        
    return $this->hasOne(Jabatan::class, 'id_dosen');
}

}
