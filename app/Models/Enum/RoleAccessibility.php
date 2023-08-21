<?php

namespace App\Models\Enum;

enum RoleAccessibility : string
{
    //Based on saacsos' work
    case NORMAL = "NORMAL";
    case HOST = "HOST";
    case ORGANIZER = "ORGANIZER";
    case STAFF = "STAFF";
}
