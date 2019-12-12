<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded=[];
    
    public function user()
    {    
        //project belongs to the user
        return $this->belongsTo(User::class);
    }
    public function tags()
    {    
        //project belongs to the user
        return $this->belongsToMany(Tag::class);
    }


}
