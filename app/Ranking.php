<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $table= 'rankings';
    protected $primaryKey= 'id';
    protected $guarded=[];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
