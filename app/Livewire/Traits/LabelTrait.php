<?php

namespace App\Livewire\Traits;

use App\Livewire\QrCodeComponent;
use Da\QrCode\Contracts\LabelInterface;

trait LabelTrait
{
    public string $label = '';
    public int $size = 16;
    public string $align = LabelInterface::ALIGN_CENTER;

    public function applyLabel()
    {
        $this->validate($this->getLabelRules());

        $this->dispatch('apply-label', $this->label, $this->size, $this->align)
            ->to(QrCodeComponent::class);
    }

    public function getLabelRules(): array
    {
        return [
            'label' => 'string|required',
            'align' => 'string|required',
            'size' => 'int|required|min:1'
        ];
    }
}
