<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataBlogs extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'data_blogs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'image', 'content', 'author',
    ];
}
