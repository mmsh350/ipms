<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            ['ContentID' => 0, 'ContentCategory' => 'Letters'],
            ['ContentID' => 1, 'ContentCategory' => 'Matches'],
            ['ContentID' => 2, 'ContentCategory' => 'Vaccines'],
            ['ContentID' => 3, 'ContentCategory' => 'Perfumes'],
            ['ContentID' => 4, 'ContentCategory' => 'Tools'],
            ['ContentID' => 5, 'ContentCategory' => 'Camping gear'],
            ['ContentID' => 6, 'ContentCategory' => 'Dry ice'],
            ['ContentID' => 7, 'ContentCategory' => 'Themometers'],
            ['ContentID' => 8, 'ContentCategory' => 'Phamaceuticals'],
            ['ContentID' => 9, 'ContentCategory' => 'Cigaratte lighter'],
            ['ContentID' => 10, 'ContentCategory' => 'Engines'],
            ['ContentID' => 11, 'ContentCategory' => 'Batteries'],
            ['ContentID' => 12, 'ContentCategory' => 'Ammunition'],
            ['ContentID' => 13, 'ContentCategory' => 'Repair kits'],
            ['ContentID' => 14, 'ContentCategory' => 'Paint'],
            ['ContentID' => 15, 'ContentCategory' => 'Electrical appliances'],
            ['ContentID' => 16, 'ContentCategory' => 'Aerosol sprays'],
            ['ContentID' => 17, 'ContentCategory' => 'Medical supplies'],
            ['ContentID' => 18, 'ContentCategory' => 'Others'],
        ];

        DB::table('MT_ContentCategory')->insert($data);
    }
}
