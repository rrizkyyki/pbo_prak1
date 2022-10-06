<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku_model extends Model
{
    use HasFactory;
    public $table = 'buku';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [
        'judul',
        'pengarang',
        'penerbit'
    ];
}
