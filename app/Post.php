<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fullable = [
      "title", "body", "user_id", "category_id", 
    ];
    
    public function category()
    {
        return $this->belongsto('App\Category');
    }
    
    public function user() 
    { 
        return $this->belongsTo('App\User');
    }
}
