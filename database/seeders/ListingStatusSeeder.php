<?php

namespace Database\Seeders;

use App\Models\ListingStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listing_status = [
            'Pending',
            'Published',
            'Rejected',
        ];

        foreach ($listing_status as $status) {
            ListingStatus::create(['name' => $status]);
        }
    }
}
