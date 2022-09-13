<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Kategori extends Model
{
    use HasFactory;
    // ini di tambahkan jika nama table tdk jamak
    protected $table = 'kategori';

    // ini jika lita menggunakan eloquent orm
    protected $guarded = [];

    public function barang(){
        return $this->belongsToMany(Barang::class);
    }
}
