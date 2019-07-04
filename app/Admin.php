<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'administrators';

    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }


    public function services(){
        return $this->belongsToMany(Service::class, 'users_services', 'admin_id', 'service_id')->withPivot(['price']);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class, 'admin_id');
    }

    //
}
