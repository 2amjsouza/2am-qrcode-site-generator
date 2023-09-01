<?php

namespace Livewire;

use App\Enum\FormatEnum;
use App\Livewire\QrCodeForm;
use Tests\TestCase;

class QrCodeFormTest extends TestCase
{
    public function test_create_qrcode()
    {
        Livewire::test(QrCodeForm::class, [FormatEnum::Text->value])
            ->set('form.text', '2am. Technologies')
            ->call('create')
            ->assertHasNoErrors()
            ->assertDispatched('create-qr-code');
    }
}
