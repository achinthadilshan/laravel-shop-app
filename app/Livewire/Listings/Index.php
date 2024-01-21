<?php

namespace App\Livewire\Listings;

use App\Models\Listing;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use App\Models\ListingStatus;
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
    public bool $checkAll = false;
    public int $currentListingCount;
    public $tableCols;

    /*
    |--------------------------------------------------------------------------
    | Get Listings
    |--------------------------------------------------------------------------
    */

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

    /*
    |--------------------------------------------------------------------------
    | Get Categories
    |--------------------------------------------------------------------------
    */

    public function getCategories()
    {
        return Category::all();
    }

    /*
    |--------------------------------------------------------------------------
    | Get Listing Statuses
    |--------------------------------------------------------------------------
    */

    public function getListingStatuses()
    {
        return ListingStatus::all();
    }

    /*
    |--------------------------------------------------------------------------
    | Get database column names of Listing model
    |--------------------------------------------------------------------------
    */

    public function getColumnNames(): void
    {
        $tableName = (new Listing())->getTable();
        $columnNames = Schema::getColumnListing($tableName);
        $this->tableCols = $columnNames;
    }

    /*
    |--------------------------------------------------------------------------
    | Get Current Listing Count
    |--------------------------------------------------------------------------
    */

    public function getListingCount(): void

    {
        $this->currentListingCount = count(Listing::pluck('id')->toArray());
    }

    /*
    |--------------------------------------------------------------------------
    | Delete Single Listing
    |--------------------------------------------------------------------------
    */

    public function deleteSingleListing(Listing $listing): void
    {
        if (Auth::id() === $listing->user_id) {
            $listing->delete();
            $this->getListingCount();
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Delete Multiple Listings
    |--------------------------------------------------------------------------
    */

    public function deleteListings(): void
    {
        Listing::whereKey($this->checked)->delete();
        $this->checked = [];
        $this->checkAll = false;
        $this->getListingCount();
    }

    /*
    |--------------------------------------------------------------------------
    | Check All Listings
    |--------------------------------------------------------------------------
    */

    public function checkAllListings(): void
    {
        $this->checked = Listing::pluck('id')->toArray();
        $this->checkAll = true;
    }

    /*
    |--------------------------------------------------------------------------
    | Uncheck All Listings
    |--------------------------------------------------------------------------
    */

    public function uncheckAllListings(): void
    {
        $this->checked = [];
        $this->checkAll = false;
    }

    /*
    |--------------------------------------------------------------------------
    | Sort Table Rows
    |--------------------------------------------------------------------------
    */

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

    /*
    |--------------------------------------------------------------------------
    | Reset pagination after filtering (life cycle hook 'updated' + variable name)
    |--------------------------------------------------------------------------
    */

    public function updatedPerPage(): void
    {
        $this->resetPage();
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    /*
    |--------------------------------------------------------------------------
    | Monitor checks (life cycle hook 'updated' + variable name)
    |--------------------------------------------------------------------------
    */

    public function updatedChecked(): void
    {
        if(count($this->checked) == $this->currentListingCount) {
            $this->checkAll = true;
        } else {
            $this->checkAll = false;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Check All (life cycle hook 'updated' + variable name)
    |--------------------------------------------------------------------------
    */

    public function updatedCheckAll($value): void
    {
        if ($value) {
            $this->checkAllListings();
        } else {
            $this->checked = [];
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Get database column names of Listing table on mount 
    | (life cycle hook 'updated' + variable name)
    |--------------------------------------------------------------------------
    */

    public function mount(): void
    {
        $this->getColumnNames();
        $this->getListingCount();
    }

    /*
    |--------------------------------------------------------------------------
    | Render the view
    | (life cycle hook 'render')
    |--------------------------------------------------------------------------
    */

    public function render()
    {
        return view('livewire.listings.index', [
            'listings' => $this->getListings(),
            'categories' => $this->getCategories(),
            'listing_statuses' => $this->getListingStatuses(),
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Dispatch JS event after render the page to fix JS instance issues
    | (life cycle hook 'rendered')
    |--------------------------------------------------------------------------
    */

    public function rendered()
    {
        $this->dispatch('initJS');
    }
}
