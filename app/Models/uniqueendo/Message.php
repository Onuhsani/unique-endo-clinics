<?php

namespace App\Models\uniqueendo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'message'
    ];



    public function getRouteKeyName()
    {
        return 'id';
    }
}
