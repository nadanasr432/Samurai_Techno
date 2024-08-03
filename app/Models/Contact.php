<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'phone',
        'location',
    ];
    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
