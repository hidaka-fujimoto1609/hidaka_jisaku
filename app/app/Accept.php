<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accept extends Model
{
    public function site(){
        return $this->belongsTo('App\Site','site_id','id');
    }
}
