<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public function getPriceFormattedAttribute()
{
    return 'Rp. ' . number_format($this->price, 0, ',', '.');
}
    protected $appends = ['price_formatted'];
    protected $guarded = [''];
}
