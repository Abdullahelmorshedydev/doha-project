<?php

namespace App\Enums;

enum CalenderTypeEnum: int
{
    case JOBOFFER = 1;
    case SIMINAR = 2;
    case TRIP = 3;

    public static function values(): array
    {
        return [
            self::JOBOFFER->value,
            self::SIMINAR->value,
            self::TRIP->value,
        ];
    }

    public function lang(): string
    {
        return match ($this)
        {
            self::JOBOFFER => 'JobOffer',
            self::SIMINAR => 'Siminar',
            self::TRIP => 'Trip',
        };
    }
}
