<?php

namespace App\Models\uniqueendo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentNewsletter extends Model
{
    use HasFactory;


    protected $fillable = [
        'subject',
        'message'
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
