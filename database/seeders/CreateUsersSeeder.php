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
               'last_name'      =>'Developer',
               'email'          =>'admin@avita.com',
               'phone'          =>'9876543211',
                'is_admin'      =>'1',
               'password'       => bcrypt('Admin@123'),
            ],
            [
               'name'           =>'User',
               'last_name'      =>'Avita',
               'email'          =>'user@avita.com',
               'phone'          =>'9876543210',
                'is_admin'      =>'0',
               'password'       => bcrypt('User@123'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
