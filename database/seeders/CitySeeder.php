<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities =  [
            [
                'name' => 'Cagayan de Oro','province_id' => '5',
            ],
            [
                'name' => 'Iligan','province_id' => '3',
            ],
            [
                'name' => 'Tangub','province_id' => '4',
            ],
            [
                'name' => 'Malaybalay','province_id' => '1',
            ],
            [
                'name' => 'Valencia','province_id' => '1',
            ],
            [
                'name' => 'Gingoog','province_id' => '5',
            ],
            [
                'name' => 'El Salvador','province_id' => '5',
            ],
            [
                'name' => 'Oroquieta','province_id' => '4',
            ],
            [
                'name' => 'Ozamiz','province_id' => '4',
            ],
        ];

        \App\Models\City::insert($cities);
    }
}
