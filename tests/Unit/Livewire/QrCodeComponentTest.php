<?php

namespace Livewire;

use App\Enum\FormatEnum;
use App\Livewire\QrCodeComponent;
use Da\QrCode\Contracts\LabelInterface;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class QrCodeComponentTest extends TestCase
{
    public function test_create_qrcode()
    {
        Livewire::test(QrCodeComponent::class)
            ->call('create', FormatEnum::Text->value, ['text' => '2am. Technologies'])
            ->assertStatus(200);

        Livewire::test(QrCodeComponent::class)
            ->call('create', FormatEnum::ICal->value, [
                'summary' => 'testing',
                'startTimestamp' => '2023-01-08 20:35:00',
                'endTimestamp' => '2023-01-08 20:45:00',
            ])
            ->assertStatus(200);
    }

    public function test_apply_colors()
    {
        Livewire::test(QrCodeComponent::class)
            ->call('applyColors', [
                'r' => 255,
                'g' => 255,
                'b' => 255,
            ], [
                'r' => 255,
                'g' => 0,
                'b' => 0,
            ])
            ->assertStatus(200);
    }

    public function test_apply_label()
    {
        Livewire::test(QrCodeComponent::class)
            ->call('applyLabel', '2am. Technologies', 22, LabelInterface::ALIGN_CENTER)
            ->assertStatus(200);
    }

    public function test_apply_margin()
    {
        Livewire::test(QrCodeComponent::class)
            ->call('applyMargin', 22)
            ->assertStatus(200);
    }

    public function test_apply_logo()
    {
        Storage::fake('local');
        $filePath = UploadedFile::fake()
            ->image('image.png')
            ->storePubliclyAs(
                'public/qrcode',
                'image.png'
            );

        Livewire::test(QrCodeComponent::class)
            ->call('applyLogo', 'storage/framework/testing/disks/local/' . $filePath)
            ->assertStatus(200);
    }

    public function test_download()
    {
        Storage::fake('local');

        Livewire::test(QrCodeComponent::class)
            ->call('download', 'png')
            ->assertFileDownloaded();

        Livewire::test(QrCodeComponent::class)
            ->call('download', 'jpg')
            ->assertFileDownloaded();
    }
}
