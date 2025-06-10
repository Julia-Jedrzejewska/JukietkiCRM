<?php

namespace App\Enums;

enum OrderStatus:string
{
    case NEW = 'nowe';
    case IN_PROGRESS = 'w realizacji';
    case COMPLETED = 'zrealizowane';
    case CANCELLED = 'anulowane';
}
