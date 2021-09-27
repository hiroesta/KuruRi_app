<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    protected $fillable = ['name'];

    public function groups(){
        return $this->hasMany(Group::class);
    }
    
}
