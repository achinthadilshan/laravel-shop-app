<?php

namespace App\Livewire\Listings;

use App\Models\Category;
use App\Models\Listing;
use App\Models\ListingStatus;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public int $perPage = 10;
    public string $search = '';
    public string $category = '';
    public string $status = '';
    public bool $is_featured = false;

    #[Computed]
    public function listings()
    {
        return Listing::search($this->search)
            ->when($this->category !== '', function ($query) {
                $query->whereHas('category', function ($subQuery) {
                    $subQuery->where('name', $this->category);
                });
            })
            ->when($this->status !== '', function ($query) {
                $query->whereHas('listing_status', function ($subQuery) {
                    $subQuery->where('name', $this->status);
                });
            })
            ->when($this->is_featured, function ($query) {
                $query->where('is_featured', true);
            })
            ->paginate($this->perPage);
    }

    #[Computed]
    public function categories() {
        return Category::all();
    }

    #[Computed]
    public function listingStatuses() {
        return ListingStatus::all();
    }

    public function render()
    {
        return view('livewire.listings.index');
    }
}
