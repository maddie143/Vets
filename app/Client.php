<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    public function animals(){
        return $this->hasMany(Animal::class, 'client_id');
    }
}
