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
            DB::table('admins')->insert([
            'role_id' => 1,
            'name' => 'hani usif',
            'email' => 'haniusif@gmail.com',
            'password' => bcrypt('123456'),
        ]);
                     DB::table('roles')->insert([

            'role_name' => 'Super Admin',
            'role_abbreviation' => 'SUP_ADM',
            'role_description' => 'Super Admin',
        ]);

                    DB::table('roles')->insert([

            'role_name' => 'Sub Admin',
            'role_abbreviation' => 'SUB_ADM',
            'role_description' => 'Sub Admin',
        ]);
    }
}
