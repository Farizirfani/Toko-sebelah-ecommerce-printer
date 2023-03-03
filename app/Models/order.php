<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Order()
    {
        return $this->belongsTo(product::class, 'product_id', 'id', 'user_id');
    }
}
