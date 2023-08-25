<?php

namespace App\Livewire\Traits;

trait LogoTrait
{
    public string $path = '';

    public function getLogoRules()
    {
        return [
            'path' => 'string|nullable|regex:(https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*))"'
        ];
    }
}
