<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MailRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['EMSId' => 1021670,
                'MailItemId' => 'SP123456789NG',
                'MailClassId' => 3,
                'TransactionDate' => now(),
                'TransactionTime' => '12:49 PM',
                'ServiceTypeId' => 21,
                'DestinationPostOfficeName' => 'TMPC-marina',
                'Zone' => 'INTER-REGION [Nation Wide]',
                'ContentCategory' => 0,
                'MailContent' => 'Letters',
                'SenderFirstname' => 'Muhammad Umar',
                'SenderAddress' => '5 onitsha cresent',
                'SenderMobile' => '09045636637',
                'ReceiverFirstname' => 'Lukma Abbas',
                'ReceiverAddress' => '51  onitsha cresent',
                'ReceiverMobile' => '09045636637',
                'MailRegistrationTypeId' => 1,
            ],

        ];

        DB::table('TT_MailRegistration')->insert($data);
    }
}
