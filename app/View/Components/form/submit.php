<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class submit extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $urlIndex;
    public function __construct($urlIndex)
    {
        $this->urlIndex = $urlIndex;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.submit');
    }
}
