<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            [
                'name' => 'Bukidnon'
            ],
            [
                'name' => 'Camiguin'
            ],
            [
                'name' => 'Lanao Del Norte'
            ],
            [
                'name' => 'Misamis Occidental'
            ],
            [
                'name' => 'Misamis Oriental'
            ],
        ];

        \App\Models\Province::insert($provinces);   
    }
}
