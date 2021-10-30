<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professionId = DB::table('professions')
            ->select('id')
            ->where(['title' => 'Desarrollador back-end'])
            ->value('id');

        DB::table('users')->insert([
            'name' => 'Miguel Mateo',
            'email' => 'miguel@mateo.com',
            'password' => Hash::make('laravel'),
            'profession_id' => $professionId
        ]);
    }
}
