<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'           => 'Sayar Kim',
            'email'          => 'waiyanavionics@gmail.com',
            'password'       => bcrypt('alliswell2020'),
            'remember_token' => Str::random(60),
            'role_id'        => 1,
        ]);
    }
}
