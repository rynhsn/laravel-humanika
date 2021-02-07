<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('sysusers')->insert([
            'uname' => 'admin',
            'namalengkap' => 'Administrator',
            'email' => 'admin@humanika.co.id',
            'upass' => sha1('admin')
        ]);
    }
}
