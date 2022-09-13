<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';

    protected $guarded = []; 

    public function barang() {
        return $this->belongsToMany(Barang::class);
    }

}