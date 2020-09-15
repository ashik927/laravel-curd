<?php

use Illuminate\Database\Seeder;
use App\ProductModel;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=100 ; $i++){
            $product = new ProductModel;
            $product->name = "Ashik - " .$i;
            $product->price = $i.$i;
            $product->stock = $i;
            $product->description = $i."Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
            $product->available = "yes";
            $product->save();

            }
    }
}
