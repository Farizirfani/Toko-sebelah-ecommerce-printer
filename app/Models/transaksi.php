<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $guarded = [''];
    public function Order()
    {
        return $this->belongsTo(order::class, 'order_id ', 'id');
    }
}
