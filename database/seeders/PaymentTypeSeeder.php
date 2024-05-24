<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['PaymentTypeId' => 1, 'PaymentTypeName' => 'Normal Cash'],
            ['PaymentTypeId' => 2, 'PaymentTypeName' => 'Credit'],
            ['PaymentTypeId' => 3, 'PaymentTypeName' => 'Pay Online'],
        ];

        DB::table('MT_PaymentType')->insert($data);
    }
}
