<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductList extends Component
{

    /**
     * Array of products to be displayed
     * 
     * @var array
     */
    public array $products;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-list');
    }
}
