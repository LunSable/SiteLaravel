<?php

use Illuminate\Database\Seeder;

class UserTab extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'vadim1019@yandex.ru',
                'email' => 'vadim1019@yandex.ru',
                'password' => bcrypt('Admin1111'),
                'idRole' => '3',
            ],
        ]);
    }
}
