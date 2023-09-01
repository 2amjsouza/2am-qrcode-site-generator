<?php

namespace Factories;

use App\Enum\FormatEnum;
use App\Factories\QrCodeFactory;
use Da\QrCode\QrCode;
use Tests\TestCase;

class QrCodeFactoryTest extends TestCase
{
    public function test_create_test_qrcode()
    {
        $this->expectNotToPerformAssertions();

        QrCodeFactory::build(FormatEnum::Text->value, ['text' => 'https://2am.tech']);
    }

    public function test_create_custom_qrcode_format()
    {
        $this->expectNotToPerformAssertions();

        QrCodeFactory::build(FormatEnum::BookMark->value, ['title' => '2am. Technologies', 'url' => 'https://2am.tech']);
    }

    public function test_format_not_supported()
    {
        $this->expectExceptionMessage('Format must be enum of ' . FormatEnum::class);

        QrCodeFactory::build(15, ['text' => 'https://2am.tech']);
    }
}
