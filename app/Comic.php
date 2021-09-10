<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'comics';

    protected $fillable = [
        'title',
        'img',
        'price',
        'type',
        'series',
        'sale_date',
        'description'
    ];
}
