<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'caption',
        'image',
        'like',
        'user_id',
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Comment()
    {
        return $this->hasMany(Comment::class);
    }
}
