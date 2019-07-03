<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    //

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }
}
