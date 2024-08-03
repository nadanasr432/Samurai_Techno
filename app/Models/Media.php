<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_name',
        'file_path',
        'file_type',
        'file_size',
        'mediable_id',
        'mediable_type',
    ];

    /**
     * Get the owning mediable model.
     */
    public function mediable()
    {
        return $this->morphTo();
    }
}
