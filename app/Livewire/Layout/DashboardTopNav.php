<?php

namespace App\Livewire\Layout;

use Livewire\Component;
use App\Livewire\Actions\Logout;

class DashboardTopNav extends Component
{
    public function render()
    {
        return view('livewire.layout.dashboard-top-nav');
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
