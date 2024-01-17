<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survei extends Model
{
    use HasFactory;

    protected $table = 'survei';

    protected $primaryKey = 'survei_id';

    protected $fillable = [
        'survei_nik',
        'survei_nama',
        'survei_telp',
        'survei_emoney',
        'survei_prov_kode',
        'survei_kab_kode',
        'survei_kec_kode',
        'survei_kel_kode',
        'survei_alamat',
        'survei_pilih'
    ];
}
