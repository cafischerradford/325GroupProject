<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PriceInfo extends Component
{

    /**
     * @var int
     */
    public $subtotal;

    /**
     * @var int
     */
    public $total;

    /**
     * @var array
     */
    public $cartitems;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subtotal, $total, $cartitems)
    {
        $this->subtotal = $subtotal;
        $this->total = $total;
        $this->cartitems = $cartitems;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.price-info');
    }
}
