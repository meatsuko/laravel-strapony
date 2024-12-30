<?php

namespace Strapony\Livewire;

use Livewire\Component;

class __ReusableComponent extends Component
{
    public $componentReset = true;

    public function reset(...$notUsed)
    {
        $this->componentReset = true;
    }

    public function __componentSet()
    {
        $this->componentReset = false;
    }
}