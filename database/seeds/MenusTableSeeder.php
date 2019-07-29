<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Category;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(Category::class, 5)->create();
        $categories->each(function($category){
            factory(Menu::class, 10)->create([
                'category_id' => $category->id,
            ]);
        });
    }
}
