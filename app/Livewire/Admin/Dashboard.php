<?php

namespace App\Livewire\Admin;

use App\Http\Controllers\DashboardController;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Dashboard')]
class Dashboard extends Component
{
    public function __construct()
    {
        $this->controller = app()->make(DashboardController::class);
    }

    public function render()
    {
        $data = $this->controller::index();
        return view('livewire.admin.dashboard', $data)->layout('layouts.admin-index');
    }
}
