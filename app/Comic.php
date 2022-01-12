<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table ="comics"; 
    
    protected $fillable = [
        'title',
        'price',
        'series',
        'sale_date',
        'type',
        
    ];
}
