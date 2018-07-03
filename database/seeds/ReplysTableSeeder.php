<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use APP\Models\Blog;
use App\Models\Reply;

class ReplysTableSeeder extends Seeder
{

    public function run()
    {
        $faker = app(Faker\Generator::class);

        $user_ids = User::all()->pluck('id')->toArray();

        $blog_ids = Blog::all()->pluck('id')->toArray();

        $replys = factory(Reply::class)
        			->times(1000)
        			->make()
        			->each(function ($reply, $index) use ($user_ids, $blog_ids, $faker)
        			{
        				$reply->user_id = $faker->randomElement($user_ids);
        				$reply->blog_id = $faker->randomElement($blog_ids);
        			});

        Reply::insert($replys->toArray());
    }
}
