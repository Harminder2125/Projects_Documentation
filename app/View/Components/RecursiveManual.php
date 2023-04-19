<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RecursiveManual extends Component
{
    public $manual;
    public $point;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($manual,$point)
    {
        $this->manual=$manual;
        $this->point=$point;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.recursive-manual');
    }
}