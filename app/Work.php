<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{

    protected $fillable = ['name','profile_id'];

    public function profiles(){
        
      
    }
}
