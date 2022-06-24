<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
               'name'           =>'Admin',
               'last_name'      =>'avita',
               'email'          =>'admin@avita.com',
               'is_admin'       =>'1',
               'phone'          =>'9777777771',
               'password'       => bcrypt('Admin@123'),
            ],
            [
               'name'           =>'User',
               'last_name'      =>'avita',
               'email'          =>'user@avita.com',
               'is_admin'       =>'0',
               'phone'          =>'7444444444',
               'password'       => bcrypt('User@123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
