<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'used_id',
    ];

    // Relacion Un Producto pertenece a un Usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
