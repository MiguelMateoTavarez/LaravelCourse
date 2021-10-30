<?php

use App\Profession;
use App\User;
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

        $professionId = Profession::where('title', 'Desarrollador back-end')
                        ->value('id');
        
        User::create([
            'name' => 'Miguel Mateo',
            'email' => 'miguel@mateo.com',
            'password' => Hash::make('laravel'),
            'profession_id' => $professionId
        ]);
    }
}
