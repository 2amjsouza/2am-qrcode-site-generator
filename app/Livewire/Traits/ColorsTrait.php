<?php

namespace App\Livewire\Traits;

use App\Livewire\QrCodeComponent;
use Psy\Util\Str;

trait ColorsTrait
{
    public string $strBackground;
    public string $strForeground;

    public array $background;
    public array $foreground;

    public function initializeColorsTrait()
    {
        if (! isset ($this->background, $this->foreground)) {
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

            $this->strForeground = "#[{$this->foreground['r']},{$this->foreground['g']},{$this->foreground['b']}]";
            $this->strBackground = "#[{$this->background['r']},{$this->background['g']},{$this->background['b']}]";
        }
    }

    public function applyColors()
    {
        $this->validate($this->getColorsRules());
        $this->background = $this->extractColors($this->strBackground);
        $this->foreground = $this->extractColors($this->strForeground);

        $this->dispatch('apply-colors', $this->foreground, $this->background)
            ->to(QrCodeComponent::class);
    }

    public function extractColors(string $color)
    {
        $color = preg_replace('/[\#\[\]]/', null, $color);
        $color = explode(',', $color);

        return [
            'r' => $color[0],
            'g' => $color[1],
            'b' => $color[2],
        ];
    }

    /**
     * @return string[]
     */
    public function getColorsRules(): array
    {
        return [
            'strForeground' => 'string|required|regex:/^\#\[\d+\,\d+\,\d+\]$/',
            'strBackground' => 'string|required|regex:/^\#\[\d+\,\d+\,\d+\]$/'
        ];
    }
}
