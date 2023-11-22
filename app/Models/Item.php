<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    public $timestamps = false;
    protected $fillable = [
        //use for selectable parents only
        'image',
        'name',
        'description',
        'price',
        'quantity',
    ];
}
