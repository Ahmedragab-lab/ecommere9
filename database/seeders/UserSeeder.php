<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create(['name'=>'Ahmed Ragab','email'=>'admin@app.com','password'=>bcrypt('123123'),'created_at'=>now(),
                      'type'=>'admin', 'email_verified_at' => now(),'remember_token' => Str::random(10)]);
        User::create(['name'=>'user user','email'=>'user@app.com','password'=>bcrypt('123123'),'created_at'=>now(),
                      'type'=>'user', 'email_verified_at' => now(),'remember_token' => Str::random(10)]);
    }
}
