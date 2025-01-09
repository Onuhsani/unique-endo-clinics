<?php

namespace App\Models\uniqueendo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\uniqueendo\Newsletter;

class Doctor extends Model
{
    use HasFactory;

    public function newsletters()
    {
        return $this->hasMany(Newsletter::class);
    }
}
