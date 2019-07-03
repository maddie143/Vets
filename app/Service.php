<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function admin(){
        return $this->belongsToMany(Admin::class, 'users_services', 'service_id', 'admin_id')->withPivot(['price']);
    }
}
