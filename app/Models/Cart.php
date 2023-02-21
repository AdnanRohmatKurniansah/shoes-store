<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'klien_id', 'product_id', 'qty'
    ];

    public function klien()
    {
        return $this->belongsTo(Klien::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}