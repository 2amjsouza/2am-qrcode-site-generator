<?php

namespace App\Livewire\Traits;

use App\Livewire\QrCodeComponent;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

trait LogoTrait
{
    use WithFileUploads;

    public $file;

    public function applyLogo()
    {
        $this->validate($this->getLogoRules());
        /** @var TemporaryUploadedFile $filename */
        $filename = uniqid() . '.' . $this->file->getClientOriginalExtension();

        $this->file->storePubliclyAs('public/qrcode', $filename);

        $this->dispatch('apply-logo', '../storage/app/public/qrcode/' . $filename, 'local')
            ->to(QrCodeComponent::class);
    }

    public function getLogoRules()
    {
        return [
            'file' => 'image|required|max:1024',
        ];
    }
}
