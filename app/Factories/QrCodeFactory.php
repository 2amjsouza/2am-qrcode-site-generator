<?php

namespace App\Factories;

use App\Enum\FormatEnum;
use Da\QrCode\Contracts\QrCodeInterface;
use Da\QrCode\QrCode;
use Exception;

class QrCodeFactory
{
    /**
     * @param int $format
     * @param array $content
     * @return QrCodeInterface
     * @throws Exception
     */
    public static function build(int $format, array $content): QrCodeInterface
    {
        try {
            $format = FormatEnum::tryFrom($format);

            if ($format->value == FormatEnum::Text->value) {
                return new QrCode($content['text']);
            }

            $formatClass = "\\Da\\QrCode\\Format\\{$format->name}Format";
            $qrCodeFormat = new $formatClass($content);

            return new QrCode($qrCodeFormat);
        } catch (Exception $exception) {
            throw $exception;
            throw new Exception('Format must be enum of ' . FormatEnum::class);
        }
    }
}
