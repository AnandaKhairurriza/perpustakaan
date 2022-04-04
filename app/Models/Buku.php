<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $primaryKey = 'id';

    protected $fillable = ['nama_buku', 'nama_peminjam', 'hp_peminjam', 'email_peminjam', 'tanggal_kembali', 'status'];

    public $timestamps = false;
}
