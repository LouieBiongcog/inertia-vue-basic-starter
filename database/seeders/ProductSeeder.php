<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')-> insert([

            ['name' => 'Burger Overload' , 'description' => 'An epic tower of flavor, where every layer bursts with juicy patties, melted cheese, crispy bacon, and a medley of toppings—too much of a good thing? Not when its this delicious!' , 'category_id' => Category::inRandomOrder()->first()->id , 'whole_sale_price' => 123.00 , 'retail_price' => 456.00 , 'image' => '/images/burger.jpeg'],

            ['name' => 'Pizza' , 'description' => 'A mouthwatering masterpiece piled high with melted cheese, savory meats, fresh veggies, and all the toppings your heart desires—its pizza like youve never experienced before!' , 'category_id' => Category::inRandomOrder()->first()->id , 'whole_sale_price' => 123.00 , 'retail_price' => 456.00 , 'image' => '/images/pizza.jpg'],

            ['name' => 'Roasted Chicken' , 'description' => 'A delightful Crispilicous Roasted Chicken for family and friends.' , 'category_id' => Category::inRandomOrder()->first()->id , 'whole_sale_price' => 123.00 , 'retail_price' => 456.00 , 'image' =>  '/images/roastedChicken.jpeg'],

            ['name' => 'Fillet Fillet' , 'description' => 'A golden, crispy fillet piled with layers of tender, flaky fish, perfectly seasoned and served with a generous helping of creamy sauces—this is seafood indulgence at its finest!', 'category_id' => Category::inRandomOrder()->first()->id , 'whole_sale_price' => 123.00 , 'retail_price' => 456.00 , 'image' => '/images/fishFillet.jpeg'],

            ['name' => 'Green Salad' , 'description' => 'A vibrant bowl of fresh greens, crisp veggies, and a rainbow of colorful toppings, all tossed in a zesty dressing—light, refreshing, and bursting with flavor in every bite!' , 'category_id' => Category::inRandomOrder()->first()->id , 'whole_sale_price' => 123.00 , 'retail_price' => 456.00 , 'image' => '/images/greenSalad.jpeg'],

            ['name' =>  'Chicken Adobo' , 'description' => 'A savory symphony of tender chicken simmered in a rich blend of soy sauce, vinegar, garlic, and aromatic spices—Chicken Adobo is a Filipino classic that bursts with bold, mouthwatering flavors in every bite!' , 'category_id' => Category::inRandomOrder()->first()->id , 'whole_sale_price' => 123.00 , 'retail_price' => 456.00 , 'image' =>  '/images/chickenAdobo.jpeg'],

        ]);
    }
}
