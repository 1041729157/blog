<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Blog;

class BlogsTableSeeder extends Seeder
{
    public function run()
    {
        $user_ids = User::all()->pluck('id')->toArray();

        /*$category_ids = Category::all()->pluck('id')->toArray();*/

        $image = [
        	'http://blog.test/images/img12.jpg',
        	'http://blog.test/images/img13.jpg',
        	'http://blog.test/images/img14.jpg',
        	'http://blog.test/images/img15.jpg',
        ];

        $faker = app(Faker\Generator::class);

        $blogs = factory(Blog::class)
        			->times(100)
        			->make()
        			->each(function($blog, $index) use ($user_ids, $image, $faker) {
        				$blog->images = $faker->randomElement($image);
        				$blog->user_id = $faker->randomElement($user_ids);
        				/*$blog->category_id = $faker->randomElement($category_ids);*/
        			});

        Blog::insert($blogs->toArray());
    }
}
