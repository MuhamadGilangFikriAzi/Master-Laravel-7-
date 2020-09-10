<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class area extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name;
    public $label;
    public $area
    public function __construct($name, $label, $area)
    {
        $this->name = $name;
        $this->label = $label;
        $this->area = $area;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.area');
    }
}
