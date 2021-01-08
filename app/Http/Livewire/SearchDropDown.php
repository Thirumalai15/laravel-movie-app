<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchDropDown extends Component
{
    public $search = "hello there";

    public function render()
    {
        return view('livewire.search-drop-down');
    }
}
