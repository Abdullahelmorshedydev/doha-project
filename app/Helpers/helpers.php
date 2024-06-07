<?php

use App\Enums\UserRoleEnum;

if (!function_exists('is_admin')) {
    function is_admin()
    {
        if (auth()->check() && auth()->user()->role->value == UserRoleEnum::ADMIN->value) {
            return true;
        }
        return false;
    }
}
