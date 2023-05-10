<?php

namespace App\Enums;

enum SupportStatus: string
{
    case A = "Open";
    case P = "Pendent";
    case C = "Closed";

    public static function fromValue(string $value): string
    {
        foreach(self::cases() as $status){
            if($status === $status->name){
                return $status->value;
            }
        }

    }
} 