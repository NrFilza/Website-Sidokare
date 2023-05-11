<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'berita';
    protected $fillable = [
        'id_berita',
        'judul_berita',
        'tanggal_publikasi',
        'id_kategori',
        'isi_berita',
        'foto',
        'unggah_file_lain',
    ];
}
