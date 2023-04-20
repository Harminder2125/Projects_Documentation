<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RecursiveManual extends Component
{
    public $manual;
    public $point;
    public $editmode = false;
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

    public function toggle($key)
    {
        if($key =='editmode')
        {
            $this->editmode = !$this->editmode;
        }
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