<?php

namespace App\Livewire\Admin\Fitur1;

use Livewire\Component;

#[Title('Fitur1')]
class Fitur1 extends Component
{
    public function render()
    {
        return view('livewire.admin.fitur1.fitur1')->layout('layouts.admin-index');
    }
}
