<?php

namespace App\Livewire;

use App\Enum\FormatEnum;
use Illuminate\Support\Collection;

class QrCodeBuilder extends WithOptionsComponent
{
    public Collection $formats;
    public int $activeFormat;

    public function mount()
    {
        $this->formats = collect(FormatEnum::cases());
        $this->selectFormat(0);
    }

    public function selectFormat(int $format)
    {
        $this->activeFormat = $format;
    }

    public function render()
    {
        return view('livewire.qr_code_builder');
    }
}
