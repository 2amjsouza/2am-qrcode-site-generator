<?php

namespace App\Livewire\Traits;

trait ColorsTrait
{
    public array $background;
    public array $foreground;

    public function initializeColorsTrait()
    {
        $this->foreground = [
            'r' => 0,
            'g' => 0,
            'b' => 0,
        ];

        $this->background = [
            'r' => 255,
            'g' => 255,
            'b' => 255,
        ];
    }

    /**
     * @return string[]
     */
    public function getColorsRules(): array
    {
        return [
            'background' => 'required|array',
            'background.*' => 'required|int',
            'foreground' => 'required|array',
            'foreground.*' => 'required|int',
        ];
    }
}
