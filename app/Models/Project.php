<?php

namespace App\Models;

use App\Models\Media;
use App\Enums\ProjectTypesEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'link',
        'type',
    ];
   

  
    public function getTypeAttribute($value)
    {
        return ProjectTypesEnum::from($value);
    }
    public function getTypeNameAttribute()
    {
        return $this->type->name;
    }

    // Mutator for type
    public function setTypeAttribute($value)
    {
        if (is_string($value)) {
            $value = ProjectTypesEnum::from($value);
        }

        $this->attributes['type'] = $value instanceof ProjectTypesEnum ? $value->value : $value;
    }
    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
