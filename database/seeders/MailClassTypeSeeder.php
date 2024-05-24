<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MailClassTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            ['MailClassId' => 1, 'MailClassName' => 'LETTERS (LC/AO)'],
            ['MailClassId' => 2, 'MailClassName' => 'PARCELS (CP)'],
            ['MailClassId' => 3, 'MailClassName' => 'EMS'],
            ['MailClassId' => 4, 'MailClassName' => 'PLB'],
            ['MailClassId' => 5, 'MailClassName' => 'Bulk Mail'],
        ];

        DB::table('MT_MailClassType')->insert($data);
    }
}
