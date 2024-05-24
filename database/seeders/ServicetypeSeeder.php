<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['ServiceId' => 1, 'ServiceName' => 'Unscheduled Pickup', 'StatusId' => 1],
            ['ServiceId' => 2, 'ServiceName' => 'Scheduled Pickup', 'StatusId' => 1],
            ['ServiceId' => 3, 'ServiceName' => 'Normal Services', 'StatusId' => 1],
            ['ServiceId' => 4, 'ServiceName' => 'School Services', 'StatusId' => 1],
            ['ServiceId' => 5, 'ServiceName' => 'Priority Services', 'StatusId' => 1],
            ['ServiceId' => 6, 'ServiceName' => 'Forwarding', 'StatusId' => 1],
            ['ServiceId' => 7, 'ServiceName' => 'PLB Registration', 'StatusId' => 1],
            ['ServiceId' => 8, 'ServiceName' => '6Hours Services', 'StatusId' => 1],
            ['ServiceId' => 9, 'ServiceName' => 'PLB Renewal', 'StatusId' => 1],
            ['ServiceId' => 10, 'ServiceName' => 'Lost Key Payment', 'StatusId' => 1],
            ['ServiceId' => 14, 'ServiceName' => 'Prepared Services', 'StatusId' => 1],
            ['ServiceId' => 21, 'ServiceName' => 'Domestic Normal', 'StatusId' => 1],
            ['ServiceId' => 22, 'ServiceName' => 'Prepaid Return', 'StatusId' => 1],
            ['ServiceId' => 23, 'ServiceName' => 'Domestic Home', 'StatusId' => 1],
            ['ServiceId' => 24, 'ServiceName' => 'Domestic Counter', 'StatusId' => 1],
            ['ServiceId' => 25, 'ServiceName' => 'Domestic', 'StatusId' => 1],
            ['ServiceId' => 26, 'ServiceName' => 'Foreign', 'StatusId' => 1],
            ['ServiceId' => 27, 'ServiceName' => 'Cancelled Receipt', 'StatusId' => 1],

        ];

        DB::table('MT_ServiceType')->insert($data);
    }
}
