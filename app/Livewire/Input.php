<?php

namespace App\Livewire;

use Livewire\Component;

class Input extends Component
{
    public $label;
    public $type;
    public $placeholder;
    public $value;
    public $name;
    public $id;
    public $required;
    public $class;


    public function mount($label = '', $type = 'text', $placeholder = '', $name = '', $id = '', $required = false, $class = '')
    {
        $this->label = $label;
        $this->type = $type;
        $this->placeholder = $placeholder ?: $label;
        $this->name = $name;
        $this->id = $id ?: $this->name;
        $this->required = $required;
        $this->class = $class;
    }

    public function render()
    {
        return view('livewire.input');
    }
}
