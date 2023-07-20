<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $fillable = [
        'email',
        'name',
        'quantity',
        'price',
        'description',
        'image',
        'address',
        'phone',
        'uname',
        'status',
    ];
}

