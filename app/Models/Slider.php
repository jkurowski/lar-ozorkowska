<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'text',
        'file',
        'file_mobile',
        'file_webp',
        'file_alt',
        'link',
        'link_button',
        'link_target',
        'opacity',
        'active',
        'sort'
    ];
}
