<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_infos')->insert([
            'name' => 'Roasters',
            'logo' => 'logo.png',
            'contact' => '01000000000',
            'email' => 'roasters@mail.com',
            'location' => '32/9, Dhanmondi, Dhaka',
        ]);
    }
}
