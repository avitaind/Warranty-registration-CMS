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
               'last_name'      =>'',
               'email'          =>'admin@avita.com',
                'is_admin'      =>'1',
               'password'       => bcrypt('Admin@123'),
            ],
            [
               'name'           =>'User',
               'last_name'      =>'',
               'email'          =>'user@avita.com',
                'is_admin'      =>'0',
               'password'       => bcrypt('User@123'),
            ],
            [
                'name'           =>'User',
                'last_name'      =>'1',
                'email'          =>'user1@avita.com',
                 'is_admin'      =>'0',
                'password'       => bcrypt('User@123'),
             ],
             [
                'name'           =>'User',
                'last_name'      =>'2',
                'email'          =>'user2@avita.com',
                 'is_admin'      =>'0',
                'password'       => bcrypt('User@123'),
             ],
             [
                'name'           =>'User',
                'last_name'      =>'3',
                'email'          =>'user3@avita.com',
                 'is_admin'      =>'0',
                'password'       => bcrypt('User@123'),
             ],
             [
                'name'           =>'User',
                'last_name'      =>'4',
                'email'          =>'user4@avita.com',
                 'is_admin'      =>'0',
                'password'       => bcrypt('User@123'),
             ],
             [
                'name'           =>'User',
                'last_name'      =>'5',
                'email'          =>'user5@avita.com',
                 'is_admin'      =>'0',
                'password'       => bcrypt('User@123'),
             ],
             [
                'name'           =>'User',
                'last_name'      =>'6',
                'email'          =>'user6@avita.com',
                 'is_admin'      =>'0',
                'password'       => bcrypt('User@123'),
             ],
             [
                'name'           =>'User',
                'last_name'      =>'7',
                'email'          =>'user7@avita.com',
                 'is_admin'      =>'0',
                'password'       => bcrypt('User@123'),
             ],
             [
                'name'           =>'User',
                'last_name'      =>'8',
                'email'          =>'user8@avita.com',
                 'is_admin'      =>'0',
                'password'       => bcrypt('User@123'),
             ],
             [
                'name'           =>'User',
                'last_name'      =>'9',
                'email'          =>'user9@avita.com',
                 'is_admin'      =>'0',
                'password'       => bcrypt('User@123'),
             ],
             [
                'name'           =>'User',
                'last_name'      =>'10',
                'email'          =>'user10@avita.com',
                 'is_admin'      =>'0',
                'password'       => bcrypt('User@123'),
             ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
