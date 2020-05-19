<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table= 'Admins';
    protected $primaryKey= 'id';
    protected $guarded=[];

    //admin asociado a cada usuario
    public function user() {
        return $this->belongTo('App\User');
    }

    public function questions() {
        return $this->hasMany('App\Question');
    }
   
    
}
