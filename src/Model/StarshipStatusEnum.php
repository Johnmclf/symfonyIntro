<?php

namespace App\Model;

enum StarshipStatusEnum: string
{
    case WAITINNG = 'waiting';
    case IN_PROGRESS = 'in progress';
    case COMPLETED = 'completed';
}