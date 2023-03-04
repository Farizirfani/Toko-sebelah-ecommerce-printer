<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $guarded = [''];
    public function Transaksi()
    {
        return $this->belongsTo(product::class, 'order_id ', 'id');
    }
}
