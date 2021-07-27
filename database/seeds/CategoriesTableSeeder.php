<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Science', 'Politics', 'Nature', 'Gossip'];

        foreach($categories as $category) {
            $newCategory = new Category;
            $newCategory->name = $category;
            $newCategory->save();
        }
    }
}
