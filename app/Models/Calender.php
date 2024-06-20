<?php

namespace App\Models;

use App\Enums\CalenderTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'date',
        'user_id',
        'type',
    ];

    protected $casts = [
        'type' => CalenderTypeEnum::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
