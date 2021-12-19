<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Drink::create([
            'image'     =>  'https://images.pexels.com/photos/7429792/pexels-photo-7429792.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
            'name'      =>  'Coca Cola',
            'price'     =>  3,
            'category'  =>  1,
        ]);
        Drink::create([
            'image'     =>  'https://images.pexels.com/photos/7429792/pexels-photo-7429792.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
            'name'      =>  'Coca Cola Light',
            'price'     =>  3.5,
            'category'  =>  1,
        ]);
        Drink::create([
            'image'     =>  'https://images.pexels.com/photos/7429792/pexels-photo-7429792.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
            'name'      =>  'Fanta',
            'price'     =>  2.5,
            'category'  =>  1,
        ]);
        Drink::create([
            'image'     =>  'https://images.pexels.com/photos/7429792/pexels-photo-7429792.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
            'name'      =>  'Sprite',
            'price'     =>  3,
            'category'  =>  1,
        ]);
    }
}
