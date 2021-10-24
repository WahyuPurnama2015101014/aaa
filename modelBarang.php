<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelBarang extends Model
{
    use HasFactory;
    public $primaryKey = 'id_brg';
    //untuk mendeskripsikan field yang dapat dimanipulasi
    protected $fillable = [
        'nama_kerajinan', 'bahan', 'variasi_ukuran', 'keterangan', 'id_peng', 'id_brg', 'harga', 'gambar',
    ];
    public function pengrajin()
    {
        return $this->belongsTo(modelPengrajin::class, 'id_peng', 'id_peng');
    }
}
