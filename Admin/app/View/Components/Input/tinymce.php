<?php

namespace Modules\Admin\app\View\Components\input;

use Illuminate\View\Component;
use Illuminate\View\View;

class tinymce extends Component
{
    /**
     * Create a new component instance.
     */
    public $attributes;
    public function __construct($attributes)
    {

    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('admin::components.input/tinymce');
    }
}
