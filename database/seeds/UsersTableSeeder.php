<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [ 'username' => 'Admin', 'email'=>'admin@admin.com', 'password'=> bcrypt('admin'), 'isAdmin'=>'1', 'isActive'=>'1'],
            [ 'username'=> 'Regular', 'email'=>'regular@regular.com', 'password'=> bcrypt('regular'), 'isAdmin'=>'0', 'isActive'=>'1']

        ]);
    }
}
