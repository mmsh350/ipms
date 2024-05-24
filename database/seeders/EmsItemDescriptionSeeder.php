<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmsItemDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            ['DescriptionId' => 1, 'Description' => 'Documents', 'StatusId' => 1],
            ['DescriptionId' => 2, 'Description' => 'Parcels', 'StatusId' => 2],
            ['DescriptionId' => 3, 'Description' => 'Small Packets', 'StatusId' => 2],
            ['DescriptionId' => 4, 'Description' => 'Printed Matter', 'StatusId' => 2],
            ['DescriptionId' => 5, 'Description' => 'Merchandise', 'StatusId' => 1],
            ['DescriptionId' => 6, 'Description' => 'Letter', 'StatusId' => 2],
            ['DescriptionId' => 7, 'Description' => 'Gifts', 'StatusId' => 2],

        ];

        DB::table('MT_EmsItemDescription')->insert($data);

    }
}
