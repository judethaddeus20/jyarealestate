<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipalities = [
            /* Bukidnon */
            [
                'name' => 'Baungon', 'province_id' => 1
            ],
            [
                'name' => 'Damulog', 'province_id' =>1
            ],
            [
                'name' => 'Dangcagan', 'province_id' =>1
            ],
            [
                'name' => 'Don Carlos', 'province_id' =>1
            ],
            [
                'name' => 'Impasug-ong', 'province_id' =>1
            ],
            [
                'name' => 'Kadingilan', 'province_id' =>1
            ],
            [
                'name' => 'Kalilangan', 'province_id' =>1
            ],
            [
                'name' => 'Kibawe', 'province_id' =>1
            ],
            [
                'name' => 'Kitaotao', 'province_id' =>1
            ],
            [
                'name' => 'Lantapan', 'province_id' =>1
            ],
            [
                'name' => 'Libona', 'province_id' =>1
            ],
            [
                'name' => 'Malitbog', 'province_id' =>1
            ],
            [
                'name' => 'Manolo Fortich', 'province_id' =>1
            ],
            [
                'name' => 'Maramag', 'province_id' =>1
            ],
            [
                'name' => 'Pangantucan', 'province_id' =>1
            ],
            [
                'name' => 'Quezon', 'province_id' =>1
            ],
            [
                'name' => 'San Fernando', 'province_id' =>1
            ],
            [
                'name' => 'Sumilao', 'province_id' =>1
            ],
            [
                'name' => 'Talakag', 'province_id' =>1
            ],
            [
                'name' => 'Cabanglasan', 'province_id' =>1
            ],
            /* Camiguin */
            [
                'name' => 'Catarman', 'province_id' =>2
            ],
            [
                'name' => 'Guinsiliban', 'province_id' =>2
            ],
            [
                'name' => 'Mahinog', 'province_id' =>2
            ],
            [
                'name' => 'Mambajao', 'province_id' =>2
            ],
            [
                'name' => 'Sagay', 'province_id' =>2
            ],
            /* Lanao Del Norte */
            [
                'name' => 'Bacolod', 'province_id' => 3
            ],
            [
                'name' => 'Balol', 'province_id' => 3
            ],
            [
                'name' => 'Baroy', 'province_id' => 3
            ],
            [
                'name' => 'Kapatagan', 'province_id' => 3
            ],
            [
                'name' => 'Sultan Naga Dimaporo', 'province_id' => 3
            ],
            [
                'name' => 'Kauswagan', 'province_id' => 3
            ],
            [
                'name' => 'Kolambugan', 'province_id' => 3
            ],
            [
                'name' => 'Lala', 'province_id' => 3
            ],
            [
                'name' => 'Linamon', 'province_id' => 3
            ],
            [
                'name' => 'Magsaysay', 'province_id' => 3
            ],
            [
                'name' => 'Maigo', 'province_id' => 3
            ],
            [
                'name' => 'Matungao', 'province_id' => 3
            ],
            [
                'name' => 'Munai', 'province_id' => 3
            ],
            [
                'name' => 'Nunungan','province_id' => 3
            ],
            [
                'name' => 'Pantao Ragat', 'province_id' => 3
            ],
            [
                'name' => 'Poona Piagapo', 'province_id' => 3
            ],
            [
                'name' => 'Salvador','province_id' => 3
            ],
            [
                'name' => 'Sapad', 'province_id' => 3
            ],
            [
                'name' => 'Tagoloan', 'province_id' => 3
            ],
            [
                'name' => 'Tangcal', 'province_id' => 3
            ],
            [
                'name' => 'Tubod', 'province_id' => 3
            ],
            [
                'name' => 'Pantar','province_id' => 3
            ],
            /* Misamis Occidental */
            [
                'name' => 'Aloran', 'province_id' => 4
            ],
            [
                'name' => 'Baliangao', 'province_id' => 4
            ],
            [
                'name' => 'Bonifacio', 'province_id' => 4
            ],
            [
                'name' => 'Calamba', 'province_id' => 4
            ],
            [
                'name' => 'Clarin', 'province_id' => 4
            ],
            [
                'name' => 'Concepcion', 'province_id' => 4
            ],
            [
                'name' => 'Jimenez', 'province_id' => 4
            ],
            [
                'name' => 'Lopez Jaena', 'province_id' => 4
            ],
            [
                'name' => 'Panaon', 'province_id' => 4
            ],
            [
                'name' => 'Plaridel', 'province_id' => 4
            ],
            [
                'name' => 'Sapang Dalaga', 'province_id' => 4
            ],
            [
                'name' => 'Sinacaban', 'province_id' => 4
            ],
            [
                'name' => 'Tudela', 'province_id' => 4
            ],
            [
                'name' => 'Don Victoriano Chiongbian', 'province_id' => 4
            ],
            /* Misamis Oriental */
            [
                'name' => 'Alubijid', 'province_id' => 5
            ],
            [
                'name' => 'Balingasag', 'province_id' => 5
            ],
            [
                'name' => 'Balingoan', 'province_id' => 5
            ],
            [
                'name' => 'Binuangan', 'province_id' => 5
            ],
            [
                'name' => 'Claveria', 'province_id' => 5
            ],
            [
                'name' => 'Gitagum', 'province_id' => 5
            ],
            [
                'name' => 'Initao', 'province_id' => 5
            ],
            [
                'name' => 'Jasaan', 'province_id' => 5
            ],
            [
                'name' => 'Kinoguitan', 'province_id' => 5
            ],
            [
                'name' => 'Lagonglong', 'province_id' => 5
            ],
            [
                'name' => 'Laguindingan', 'province_id' => 5
            ],
            [
                'name' => 'Libertad', 'province_id' => 5
            ],
            [
                'name' => 'Lugait', 'province_id' => 5
            ],
            [
                'name' => 'Magsaysay', 'province_id' => 5
            ],
            [
                'name' => 'Manticao', 'province_id' => 5
            ],
            [
                'name' => 'Medina', 'province_id' => 5
            ],
            [
                'name' => 'Naawan', 'province_id' => 5
            ],
            [
                'name' => 'Opol', 'province_id' => 5
            ],
            [
                'name' => 'Salay', 'province_id' => 5
            ],
            [
                'name' => 'Sugbongcogon', 'province_id' => 5
            ],
            [
                'name' => 'Tagoloan', 'province_id' => 5
            ],
            [
                'name' => 'Talisayan', 'province_id' => 5
            ],
            [
                'name' => 'Villanueva', 'province_id' => 5
            ],
        ];
        \App\Models\Municipality::insert($municipalities);
    }
}
