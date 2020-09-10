<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class select extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $label;
    public $name;
    public $class;
    public $id;
    public $data;

    public function __construct($label, $name, $class, $id, $data)
    {
        $this->label = $label;
        $this->name = $name;
        $this->class = $class;
        $this->id = $id;
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.select');
    }
}
