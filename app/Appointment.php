<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = [
        'admin_id','client_id','service_id','animal_id','date','hour','confirmation','medic_id'];
    //

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class,'admin_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }
}
