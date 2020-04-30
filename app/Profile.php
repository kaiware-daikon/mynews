<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    //
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required'
        );
        
    // Profileモデルに関連付を行う
    public function profileHistories()
    {
        return $this->hasMany('App\ProfileHistory');
    }
}
