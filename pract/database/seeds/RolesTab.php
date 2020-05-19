<?php

use Illuminate\Database\Seeder;

class RolesTab extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        [
            'id' =>'1',
            'name' => 'Пользователь'
        ],
        [
            'id' =>'2',
            'name' => 'Модератор'
        ],
        [
            'id' =>'3',
            'name' => 'Администратор'
        ],
        ]);
    }
}
