<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{

    /**
     * The currently active path
     * 
     * @var string
     */
    public $active;

    /**
     * The number of items in the cart
     * 
     * @var int
     */
    public $count;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($active, $count)
    {
        $this->active = $active;
        $this->count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
