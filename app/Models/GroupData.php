<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupData extends Model
{
    use HasFactory;
    protected $primaryKey = 'group_id';
    
    // One to Many to get Members by Groups.
    function getMembersByGroups(){
        return $this->hasMany('App\Models\MemberData', 'group_id', 'group_id');
    }
}
