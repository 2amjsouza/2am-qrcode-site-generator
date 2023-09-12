<?php

namespace App\Livewire\Traits;

use App\Livewire\QrCodeComponent;

trait MarginTrait
{
    public $margins = 15;

    public function applyMargin()
    {
        $this->validate($this->getMarginRules());

        $this->dispatch('apply-margin', $this->margins)
            ->to(QrCodeComponent::class);
    }

    public function updatedMarginTrait($property, $value)
    {
        if ($this->checkTraitProps($property, MarginTrait::class)) {
            $this->applyMargin();
        }
    }

    public function getMarginRules(): array
    {
        return [
            'margins' => 'int|required|min:0|max:50',
        ];
    }
}
