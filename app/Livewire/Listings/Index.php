<?php

namespace App\Livewire\Listings;

use App\Models\Listing;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public int $perPage = 10;

    public function render()
    {
        return view('livewire.listings.index', [
            'listings' => Listing::paginate($this->perPage)
        ]);
    }
}
