<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas_model extends Model
{
    use HasFactory;
    public $table = 'petugas';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [
        'nama'
    ];
}
