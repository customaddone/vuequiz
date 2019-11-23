<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Explanation extends Model
{
    protected $fillable = [
        'item_id', 'explanation'
    ];

    public function items() {
        return $this->belongsTo('App\Item');
    }
}
