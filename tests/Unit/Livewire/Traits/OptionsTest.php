<?php

namespace Livewire\Traits;

use App\Enum\FormatEnum;
use App\Livewire\QrCodeBuilder;
use Da\QrCode\Contracts\LabelInterface;
use Livewire\Livewire;
use Tests\TestCase;

class OptionsTest extends TestCase
{
    public function test_apply_colors()
    {
        Livewire::test(QrCodeBuilder::class, [FormatEnum::Text->value])
            ->set('strForeground', '#fff000')
            ->set('strBackground', '#ffcccc')
            ->call('applyColors')
            ->assertHasNoErrors()
            ->assertDispatched('apply-colors');

        Livewire::test(QrCodeBuilder::class, [FormatEnum::Text->value])
            ->set('strForeground', '#ggg123')
            ->set('strBackground', '#kyc0981')
            ->assertHasNoErrors([
                'strForeground',
                'strBackground'
            ]);
    }

    public function test_apply_label()
    {
        Livewire::test(QrCodeBuilder::class, [FormatEnum::Text->value])
            ->set('label', '2am. Technologies')
            ->set('size', 22)
            ->set('align', LabelInterface::ALIGN_RIGHT)
            ->call('applyLabel')
            ->assertHasNoErrors()
            ->assertDispatched('apply-label');
    }
}
