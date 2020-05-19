<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table= 'Admins';
    protected $primaryKey= 'id';
    protected $guarded=[];

    //pregunta asociada a cada usuario
    public function userAdmin() {
        return $this->belongTo('App\Admin');
    }

    //cada pregunta proviene de una categoria
    public function category() {
        return $this->belongTo('App\Category');
    }
}
