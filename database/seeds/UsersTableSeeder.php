<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $userID = DB::table('users')->insertGetId([
            'firstName' => 'Vadi',
            'lastName' => 'admin',
            'email' => 'admin@uandi.com',
            'userName' => 'admin',
            'password' => Hash::make(md5('123456789')),
            'activated' => '1',
            'verified' => '1',
            'userStatus' => '1'
        ]);
        DB::table('profiles')->insert([
            'userId' => $userID
        ]);
        DB::table('user_roles')->insert([
            'roleId' => '1',
            'userId' => $userID,
            'userRoleStatus' => '1'
        ]);
        return 'Success';
    }

}
