<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            ['name'     => 'ΠΕΤΡΟΛΚΟ'],
            ['name'     => 'ΑΥΓΕΡΟΙΛ'],
            ['name'     => 'OIKOSERVICE'],
            ['name'     => 'INOIL'],
            ['name'     => 'POLYGON'],
            ['name'     => 'ΠΕΤΡΟΣ ΔΙΑΧΕΙΡΙΣΤΙΚΗ']
        ];

        foreach ($companies as $comp) {
            Company::updateOrCreate(['name' => $comp['name']], $comp);
        }
    }
}
