<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'comment',
        'posts_id'
    ];

    public function posts()
    {
        //return $this->belongsTo(Posts::class,'posts_id','id');

        return $this->belongsTo(Posts::class);
    }
}
