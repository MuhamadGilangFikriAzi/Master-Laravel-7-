<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $label;
    public $name;
    public $type;
    public $class;

    public function __construct($label, $name, $type, $class)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
