<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image', 'name', 'description', 'price'
    ];
}
