<?php

namespace App\Livewire\Layouts;

use Livewire\Component;
use App\Livewire\Actions\Logout;

class DashboardTopNav extends Component
{
    public function render()
    {
        return view('livewire.layouts.dashboard-top-nav');
    }

    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}
