<?php

use App\Profession;
use App\User;
use Illuminate\Database\Seeder;
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
        
        factory(User::class)->create([
            'name' => 'Miguel Mateo',
            'email' => 'miguel@mateo.com',
            'password' => Hash::make('laravel'),
            'profession_id' => $professionId,
            'is_admin' => true,
        ]);

        factory(User::class)->create([
            'profession_id' => $professionId,
        ]);

        factory(User::class, 48)->create();
    }
}
