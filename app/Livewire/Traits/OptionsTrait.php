<?php

namespace App\Livewire\Traits;

use App\Enum\OptionsEnum;

trait OptionsTrait
{
    public ?int $activeOption = null;

    public function toggleOption(int $option)
    {
        $option = OptionsEnum::from($option);

        $this->activeOption = $option->value;
    }
}
