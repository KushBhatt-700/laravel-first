<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquireFormModel extends Model
{
    use HasFactory;
    protected $table = 'enquire_form';
    protected $primaryKey = 'form_id';

    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    public function setPrivacyAttribute($value){
        $this->attributes['privacy'] = $value == 'on' ? 1 : 0;
    }

    public function getPrivacyAttribute($value){
        $data = $value == '1' ? 'checked' : '';
        return $data;
    }
}
