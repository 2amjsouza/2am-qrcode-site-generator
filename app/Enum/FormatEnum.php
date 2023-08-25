<?php

namespace App\Enum;

enum FormatEnum: int
{
    case Text = 0;
    case BookMark = 1;
    case Btc = 2;
    case Geo = 3;
    case ICal = 4;
    case MailMessage = 5;
    case MailTo = 6;
    case Mms = 7;
    case Phone = 8;
    case Sms = 9;
    case VCard = 10;
    case Wifi = 11;
    case Youtube = 12;
    case MeCard = 13;
}
