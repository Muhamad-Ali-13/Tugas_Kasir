<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_supplier',
        'no_hp',
        'alamat',
    ];

    protected $table = 'supplier';

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class, 'id_supplier');
    }
}
