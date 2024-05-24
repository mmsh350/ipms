<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmsBillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'TotalAmount' => '2857.5',
                'MailItemId' => 'SP123456789NG',
                'Weight' => '0.5',
                'Box1' => 'EL',
                'Box2' => 'L',
                'Box3' => 'M',
                'Box4' => 'Mi',
                'Box5' => 'S',
                'Qty1' => '0',
                'Qty2' => '0',
                'Qty3' => '1',
                'Qty4' => '0',
                'Qty5' => '0',
                'Amt1' => '0',
                'Amt2' => '0',
                'Amt3' => '300',
                'Amt4' => '0',
                'Amt5' => '0',
                'Rate1' => '500',
                'Rate2' => '400',
                'Rate3' => '300',
                'Rate4' => '120',
                'Rate5' => '200',
                'TarrifAmount' => '2200',
                'ServiceCharges' => '500 ',
                'Packaging' => '300',
                'Forwarding' => '0',
                'Wrapper_Qty' => '1',
                'Wrapper_Amt' => '200',
                'PrepaidDiscount' => '0',
                'CashDiscount' => '0',
                'Vat' => '157.5',

            ],

        ];

        DB::table('TT_EmsBill')->insert($data);
    }
}
