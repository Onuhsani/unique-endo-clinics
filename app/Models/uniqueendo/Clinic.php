<?php

namespace App\Models\uniqueendo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];


    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
