<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::create(10)-> factory();
        DB::table('categories')-> insert([

            ['name' => 'Burger Overload' , 'description' => 'An epic tower of flavor, where every layer bursts with juicy patties, melted cheese, crispy bacon, and a medley of toppings—too much of a good thing? Not when its this delicious!'],

            ['name' => 'Pizza' , 'description' => 'A mouthwatering masterpiece piled high with melted cheese, savory meats, fresh veggies, and all the toppings your heart desires—its pizza like youve never experienced before!' ],

            ['name' => 'Roasted Chicken' , 'description' => 'A delightful Crispilicous Roasted Chicken for family and friends.'],

            ['name' => 'Fillet Fillet' , 'description' => 'A golden, crispy fillet piled with layers of tender, flaky fish, perfectly seasoned and served with a generous helping of creamy sauces—this is seafood indulgence at its finest!'],

            ['name' => 'Green Salad' , 'description' => 'A vibrant bowl of fresh greens, crisp veggies, and a rainbow of colorful toppings, all tossed in a zesty dressing—light, refreshing, and bursting with flavor in every bite!' ],

            ['name' =>  'Chicken Adobo' , 'description' => 'A savory symphony of tender chicken simmered in a rich blend of soy sauce, vinegar, garlic, and aromatic spices—Chicken Adobo is a Filipino classic that bursts with bold, mouthwatering flavors in every bite!'],

        ]);
    }
}
