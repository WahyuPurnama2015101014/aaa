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
        'id_brg', 'nama', 'data1', 'data2'
    ];
    public function addData()
    {
    }
}
