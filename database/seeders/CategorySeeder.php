<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
    use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $parentCategory = [
            [
                'name' => 'Type'
            ]
        ]; 
        \App\Models\Category::insert($parentCategory);
        $childCategory = [
            [
                'name' => 'Mansion',
                'parent_id' => 1,
            ],
            [
                'name' => 'Villa',
                'parent_id' => 1,
            ],
            [
                'name' => 'Single Detached',
                'parent_id' => 1,
            ],
            [
                'name' => 'House and Lot',
                'parent_id' => 1,
            ]
        ];
        \App\Models\Category::insert($childCategory);   
        
        
    }
}
