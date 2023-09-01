<?php

namespace Livewire\Traits;

use App\Enum\FormatEnum;
use App\Enum\OptionsEnum;
use App\Livewire\QrCodeBuilder;
use Da\QrCode\Contracts\LabelInterface;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
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
            ])
            ->assertNotDispatched('apply-colors');
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

        Livewire::test(QrCodeBuilder::class, [FormatEnum::Text->value])
            ->set('label', '')
            ->set('size', 0)
            ->set('align', '')
            ->call('applyLabel')
            ->assertHasErrors([
                'label',
                'size',
                'align'
            ])
            ->assertNotDispatched('apply-label');
    }

    public function test_apply_logo()
    {
        Storage::fake('tests');
        $file = UploadedFile::fake()->image('image.pne');

        Livewire::test(QrCodeBuilder::class, [FormatEnum::Text->value])
            ->set('file', $file)
            ->call('applyLogo')
            ->assertHasNoErrors()
            ->assertDispatched('apply-logo');

        Livewire::test(QrCodeBuilder::class, [FormatEnum::Text->value])
            ->set('file', '')
            ->call('applyLogo')
            ->assertHasErrors(['file'])
            ->assertNotDispatched('apply-logo');
    }

    public function test_apply_margin()
    {
        Livewire::test(QrCodeBuilder::class, [FormatEnum::Text->value])
            ->set('margins', 22)
            ->call('applyMargin')
            ->assertHasNoErrors()
            ->assertDispatched('apply-margin');

        Livewire::test(QrCodeBuilder::class, [FormatEnum::Text->value])
            ->set('margins', -1)
            ->call('applyMargin')
            ->assertHasErrors(['margins'])
            ->assertNotDispatched('apply-margin');
    }

    public function test_toogle_option_form()
    {
        Livewire::test(QrCodeBuilder::class, [FormatEnum::Text->value])
            ->call('toggleOption', OptionsEnum::Label->value)
            ->call('toggleOption', OptionsEnum::Colors->value)
            ->call('toggleOption', OptionsEnum::Margin->value)
            ->call('toggleOption', OptionsEnum::Logo->value)
            ->assertHasNoErrors();
    }
}
