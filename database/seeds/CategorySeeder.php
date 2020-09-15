<?php

use Illuminate\Database\Seeder;
use App\category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            for($i=1; $i<=100 ; $i++){
            $category = new category;
            $category->name = "Ashik - " .$i;
            $category->description = $i."Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
            $category->image="";
            $category->slug="";
            $category->user_id="";
            $category->tag="";
            $category->save();

            }
    
    }
}
