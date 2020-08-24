<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'date_online', 'date_offline', 'price', 'currency_id', 'category_id', 'user_id'];
}
 