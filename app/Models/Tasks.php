<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

   // protected $hidden = [ 'title'];


    protected $fillable = [
        'title',
        'description',
        'description2',
        'full_name'
    ];

    public function getFullNameAttribute()
    {
        return $this->title." ".$this->description;
    }

    /**
     * Set the post title.
     *
     * @param  string  $value
     * @return string
     */

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }
}
