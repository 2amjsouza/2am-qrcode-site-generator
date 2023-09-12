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

            $this->strForeground = "#000000";
            $this->strBackground = "#FFFFFF";
        }
    }

    public function colorSelected()
    {
        $this->applyColors();
    }

    public function applyColors()
    {
        $this->background = $this->extractColors($this->strBackground);
        $this->foreground = $this->extractColors($this->strForeground);

        $this->validate($this->getColorsRules());

        $this->dispatch('apply-colors', $this->foreground, $this->background)
            ->to(QrCodeComponent::class);
    }

    public function extractColors(string $color)
    {
        list($red, $green, $blue) = array_map(
            function ($c) {
                return hexdec(str_pad($c, 2, $c));
            },
            str_split(ltrim($color, '#'), strlen($color) > 4 ? 2 : 1)
        );

        return [
            'r' => $red,
            'g' => $green,
            'b' => $blue,
        ];
    }

    /**
     * @return string[]
     */
    public function getColorsRules(): array
    {
        return [
            'strForeground' => 'string|required|regex:/^\#[A-f,0-9]{6}$/',
            'strBackground' => 'string|required|regex:/^\#[A-f,0-9]{6}$/'
        ];
    }
}
