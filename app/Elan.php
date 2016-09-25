<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elan extends Model
{

   protected $table='els';

    public function nese()
    {
       return $this->belongsTo('App\Elantype','type_id');
    }

    public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function qarsiliqlar()
    {
       return $this->hasMany('App\Qarsiliq','elan_id');
    }
}
