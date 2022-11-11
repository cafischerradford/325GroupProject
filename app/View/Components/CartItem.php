<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CartItem extends Component
{

    /**
     * @var CartItem
     */
    public $cartitem;
    
    /**
     * @var int
     */
    public $key;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cartitem, $key)
    {
        $this->cartitem = $cartitem;
        $this->key = $key;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cart-item');
    }
}
