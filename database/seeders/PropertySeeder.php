<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Property::factory()->count(3)->create();
        foreach(\App\Models\Category::take(5)->get() as $category){
            $property = \App\Models\Property::inRandomOrder()->take(1)->pluck('id');
            $category->properties()->attach($property);
        }
    }
}
