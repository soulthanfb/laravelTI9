<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\facades\DB;

class Produk extends Model
{
    use HasFactory;

protected $table = 'produk';
public $timestamps = false;
protected $fillable = [

    'kode',
    'nama',
    'harga_jual',
    'harga_beli',
    'stok',
    'min_stok',
    'deskripsi',
    'kategori_produk_id',
    
];
public function kategoriProduk()
{
return $this->belongsTo(KategoriProduk::class);
}
public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    } 

    public function getAlldata(){
        return DB::table('produk')
        ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk_id')
        ->select('produk.*','kategori_produk.nama as nama')
        ->get();
    }
}