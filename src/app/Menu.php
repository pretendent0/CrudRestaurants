<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function getRestaurant()
    {
        return $this->hasMany('App\Restaurant', 'menu_id', 'id');
    }
}
