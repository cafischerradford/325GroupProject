<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CartList extends Component
{

    /**
     * @var array
     */
    public $cartitems;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cartitems)
    {
        $this->cartitems = $cartitems;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cart-list');
    }
}
