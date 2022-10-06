<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota_model extends Model
{
    use HasFactory;
    public $table = 'anggota';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'tgl_reg'
    ];
}
