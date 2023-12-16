<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'user_id',
        'category_id',
        'body'
    ];


    public function category()
    {
        return $this->belongsTo(categories::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
