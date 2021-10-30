<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->insert([
            'title' => 'Desarrollador back-end',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('professions')->insert([
            'title' => 'Desarrollador front-end',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('professions')->insert([
            'title' => 'Diseñdor web',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
