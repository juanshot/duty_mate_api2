<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{

    protected $fillable = ['profile_id','name'];
    public function profiles(){
        
    }
    
}
