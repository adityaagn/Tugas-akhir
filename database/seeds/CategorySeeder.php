<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['id'=>'1','category_name'=>'Environment','category_slug'=>'environment','image'=>'1491145686oenmh-trees-790220-640.jpg','created_at'=>'2018-03-05 12:23:32','updated_at'=>'2018-03-05 12:23:32'],
        	['id'=>'2','category_name'=>'Foods and Drinks','category_slug'=>'foods-and-drinks','image'=>'1491145733fbqwf-cheeseburger-34314-640.png','created_at'=>'2018-03-05 12:23:34','updated_at'=>'2018-03-05 12:23:38'],
        	['id'=>'3','category_name'=>'Travels & Outdoors','category_slug'=>'travels-outdoors','image'=>'11491145636viahm-train-1728537-640.jpg','created_at'=>'2018-03-05 12:23:12','updated_at'=>'2018-03-05 12:23:15'],
        	['id'=>'4','category_name'=>'Nonprofit','category_slug'=>'nonprofit','image'=>'1491146002j4dag-shops-1026420-640.jpg','created_at'=>'2018-03-05 12:23:32','updated_at'=>'2018-03-05 12:33:32'],
        	['id'=>'5','category_name'=>'Innovation','category_slug'=>'innovation','image'=>'1491146112zhffi-thought-2123971-640.jpg','created_at'=>'2018-03-05 12:43:32','updated_at'=>'2018-03-05 12:53:32'],
        	['id'=>'6','category_name'=>'Health and Fitness','category_slug'=>'health-and-fitness','image'=>'1491146158w9d9f-gym-455164-640.jpg','created_at'=>'2018-03-05 12:23:32','updated_at'=>'2018-03-05 12:23:32'],
        	['id'=>'7','category_name'=>'Fashion','category_slug'=>'fashion','image'=>'1491146220ylegj-model-600238-640.jpg','created_at'=>'2018-03-05 12:23:32','updated_at'=>'2018-03-05 12:23:32'],
        	['id'=>'8','category_name'=>'Community Projects','category_slug'=>'community-projects','image'=>'1491146362sexaa-team-386673-640.jpg','created_at'=>'2018-03-05 12:23:32','updated_at'=>'2018-03-05 12:23:32'],

        ]);
    }
}
