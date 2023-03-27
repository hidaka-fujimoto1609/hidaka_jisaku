<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accept extends Model
{
    public function site(){
        return $this->belongsTo('App\Site','site_id','id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id','id');

    }

    public function personal(){
        return $this->belongsTo('App\Personal','user_id','user_id');
    }
}
