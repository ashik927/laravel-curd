<?php

use Illuminate\Database\Seeder;
use App\order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=100 ; $i++){
            $order = new order;
            $order->status = "Ashik - " .$i;
            $order->description = $i."Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
            $order->save();

            }
    }
}
