<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // fillableの記入を忘れずに
    protected $fillable = [
        'user_id', 'item_name'
    ];
}
