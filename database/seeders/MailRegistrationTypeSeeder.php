<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MailRegistrationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['MailRegistrationTypeId' => 1, 'MailRegisterName' => 'On Demand'],
            ['MailRegistrationTypeId' => 2, 'MailRegisterName' => 'Programmed'],
        ];

        DB::table('MT_MailRegistrationType')->insert($data);
    }
}
