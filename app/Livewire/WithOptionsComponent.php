<?php

namespace App\Livewire;

use App\Livewire\Traits\ColorsTrait;
use App\Livewire\Traits\LabelTrait;
use App\Livewire\Traits\LogoTrait;
use App\Livewire\Traits\MarginTrait;
use Livewire\Component;


abstract class WithOptionsComponent extends Component
{
    use ColorsTrait;
    use LabelTrait;
    use MarginTrait;
    use LogoTrait;

    /**
     * @param string $property
     * @param string $className
     * @return bool
     */
    public function checkTraitProps(string $property, string $className): bool
    {
        $classProperties = array_keys(get_class_vars($className));

        return in_array($property, $classProperties);
    }
}
