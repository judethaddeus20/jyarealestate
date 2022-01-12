<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([AdminAccountSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([CategorySeeder::class]);
        $this->call([ProvinceSeeder::class]);
        $this->call([CitySeeder::class]);
        $this->call([MunicipalitySeeder::class]);
       
    }
}
