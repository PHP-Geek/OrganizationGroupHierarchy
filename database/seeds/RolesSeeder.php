<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('roles')->insert([
            [
                'id' => '1',
                'roleName' => 'System Administrator',
                'roleSlug' => 'system-admin',
                'roleUrlPrefix'=>'superadmin',
                'roleStatus' => '1',
                'roleHierarchy' => '1'
            ],
            [
                'id' => '2',
                'roleName' => 'Dialog Engineer',
                'roleSlug' => 'dialog-engineer',
                'roleUrlPrefix'=>'dailogEngineer',
                'roleStatus' => '1',
                'roleHierarchy' => '2'
            ],
            [
                'id' => '3',
                'roleName' => 'User Administrator',
                'roleSlug' => 'user-admin',
                'roleUrlPrefix'=>'admin',
                'roleStatus' => '1',
                'roleHierarchy' => '3'
            ],
            [
                'id' => '4',
                'roleName' => 'Analyst',
                'roleSlug' => 'analyst',
                'roleUrlPrefix'=>'analyst',
                'roleStatus' => '1',
                'roleHierarchy' => '4'
            ],
            [
                'id' => '5',
                'roleName' => 'Session Leader',
                'roleSlug' => 'session-leader',
                'roleUrlPrefix'=>'sessionLeader',
                'roleStatus' => '1',
                'roleHierarchy' => '5'
            ],
            [
                'id' => '6',
                'roleName' => 'Reviewer',
                'roleSlug' => 'reviewer',
                'roleUrlPrefix'=>'reviewer',
                'roleStatus' => '1',
                'roleHierarchy' => '6'
            ],
            [
                'id' => '7',
                'roleName' => 'Participants',
                'roleSlug' => 'participants',
                'roleUrlPrefix'=>'participants',
                'roleStatus' => '1',
                'roleHierarchy' => '7'
            ]
        ]);
    }

}
