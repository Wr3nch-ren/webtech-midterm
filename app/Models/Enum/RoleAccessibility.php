<?php

namespace App\Models\Enum;

enum RoleAccessibility : string
{
    case NORMAL = "NORMAL";
    case ORGANIZER = "ORGANIZER";
    case STAFF = "STAFF";
}
