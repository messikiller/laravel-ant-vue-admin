<?php

use Illuminate\Database\Seeder;

class TUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('t_users')->delete();

        \DB::table('t_users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'username' => 'admin',
                'nickname' => 'administrator',
                'password' => bcrypt('admin'),
                'created_at' => 0,
            ),
        ));


    }
}
