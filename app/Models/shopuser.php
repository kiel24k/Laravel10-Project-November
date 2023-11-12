<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class shopuser extends Model
{
    use HasFactory;
    protected $table = 'shop_user';
    protected $fillable = [
        'game_id',
        'email',
        'password'
    ];
}
