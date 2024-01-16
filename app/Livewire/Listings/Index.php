<?php

namespace App\Livewire\Listings;

use App\Models\Listing;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use App\Models\ListingStatus;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class Index extends Component
{
    use WithPagination;

    public int $perPage = 10;
    public string $search = '';
    public string $category = '';
    public string $status = '';
    public bool $is_featured = false;
    public string $sortByCol = 'created_at';
    public string $sortDir = 'DESC';
    public array $checked = [];
    public $tableCols;

    public function getListings()
    {
        return Listing::with(['category', 'listing_status'])->search($this->search)
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
            ->orderBy($this->sortByCol, $this->sortDir)
            ->paginate($this->perPage);
    }

    public function getCategories()
    {
        return Category::all();
    }

    public function getListingStatuses()
    {
        return ListingStatus::all();
    }

    public function getColumnNames(): void
    {
        $tableName = (new Listing())->getTable();
        $columnNames = Schema::getColumnListing($tableName);
        $this->tableCols = $columnNames;
    }

    public function deleteSingleListing(Listing $listing): void
    {
        if (Auth::id() === $listing->user_id) {
            $listing->delete();
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function deleteListings(): void
    {
        Listing::whereKey($this->checked)->delete();
        $this->checked = [];
    }

    public function selectAllListings(): void
    {
        $this->checked = Listing::pluck('id')->toArray();
    }

    // life cycle hook 'updated' for reset table
    public function updatedPerPage(): void
    {
        $this->resetPage();
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function mount(): void
    {
        $this->getColumnNames();
    }

    public function sort($col): void
    {
        if (in_array($col, $this->tableCols)) {

            if ($this->sortByCol === $col) {
                $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC' : 'ASC';
                return;
            }

            $this->sortByCol = $col;
            $this->sortDir = 'DESC';
        }
    }

    public function render()
    {
        return view('livewire.listings.index', [
            'listings' => $this->getListings(),
            'categories' => $this->getCategories(),
            'listing_statuses' => $this->getListingStatuses(),
        ]);
    }

    public function rendered()
    {
        $this->dispatch('initJS');
    }
}
