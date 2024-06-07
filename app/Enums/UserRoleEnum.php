<?php

namespace App\Enums;

enum UserRoleEnum: int
{
    case GUEST = 1;
    case ADMIN = 2;
    case ORGANIZER = 3;

    public static function values(): array
    {
        return [
            self::GUEST->value,
            self::ADMIN->value,
            self::ORGANIZER->value,
        ];
    }

    public function lang(): string
    {
        return match ($this)
        {
            self::GUEST => 'Guest',
            self::ADMIN => 'Admin',
            self::ORGANIZER => 'Organizer',
        };
    }
}
