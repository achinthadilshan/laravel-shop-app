<?php

namespace App\Livewire\Components\Dashboard;

use Livewire\Component;
use App\Livewire\Actions\Logout;

class TopNav extends Component
{
    public function render()
    {
        return view('livewire.components.dashboard.top-nav');
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
