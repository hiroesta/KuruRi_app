<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupInformations extends Model
{
    protected $fillable = [
        'content','group_id'
    ];

    public function groups(){
        return $this->belongsTo(Group::class);
    }
}
