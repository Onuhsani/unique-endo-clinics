<?php

namespace App\Models\uniqueendo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\uniqueendo\Doctor;

class Newsletter extends Model
{
    use HasFactory;

    protected $fillable = ['email'];


    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
