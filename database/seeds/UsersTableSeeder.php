<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $faker = app(Faker\Generator::class);

        $avatars = [
        	"http://blog.test/avatar/1.jpg",
        	"http://blog.test/avatar/2.jpg",
        	"http://blog.test/avatar/3.jpg",
        	"http://blog.test/avatar/4.jpg",
        ];

        $users = factory(User::class)
        				->times(10)
        				->make()
        				->each(function($user, $index) use ($faker, $avatars) {
        					$user->avatar = $faker->randomElement($avatars);
        				});

        $user_array = $users->makeVisible(['password', 'remember_token'])->toArray();

        // 插入数据库
        User::insert($user_array);

        $user = User::find(1);
        $user->assignRole('Founder'); // 将 1 号用户指派为『站长』
        $user->name = 'HH';
        $user->email = '1041729157@qq.com';
        $user->avatar = 'http://blog.test/avatar/4.jpg';
        $user->save();

        // 将 2 号用户指派为『管理员』
        $user = User::find(2);
        $user->assignRole('Maintainer');
        $user->name = 'KK';
        $user->email = '997416426@qq.com';
        $user->avatar = 'http://blog.test/avatar/3.jpg';
        $user->save();
    }
}
