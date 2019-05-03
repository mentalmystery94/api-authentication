<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    public function User()
    
    {
        return $this->belongsToMany('App\User');
    }

  
// this connect the foreign key to another table  
    
    protected $fillable = [
    'id', 'first_name', 'last_name', 'image'
    ];
}

