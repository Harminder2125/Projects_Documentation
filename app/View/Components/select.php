<?php

namespace App\View\Components;

use Illuminate\View\Component;

class select extends Component
{
    public $userlist;
   
    public function __construct($userlist)
    {

        $this->userlist=$userlist;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select');
    }
}
