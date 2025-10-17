<?php

namespace App\Models\uniqueendo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;


    protected $fillable = [
        'clinic_id',
        'name',
        'email',
        'phone',
        'appointment_date',
        'status',
        'notes'
    ];


    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }


    public function getRouteKeyName()
    {
        return 'id';
    }
}
