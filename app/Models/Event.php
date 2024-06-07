<?php

namespace App\Models;

use App\Enums\EventTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Event extends Model
{
    use HasFactory;

    const IMG_URL = 'uploads/events/';

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'morphable');
    }
}
