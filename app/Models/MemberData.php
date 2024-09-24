<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberData extends Model
{
    use HasFactory;
    protected $primaryKey = 'form_id';
    
    // One To One Relation.
    function getGroup(){
        return $this->hasOne('App\Models\GroupData', 'group_id');
    }

    // One To Many Relation.
    function getMemberWithGroup(){
        return $this->hasMany('App\Models\GroupData', 'group_id', 'group_id');
    }

}
