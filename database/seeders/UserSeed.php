<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=5; $i++){
            User::create([
                'name'=>Str::random(10),
                'email'=>Str::random(10).'@gmail.com',
                'password'=>bcrypt('secret'),
                ]);
        }
    }
}
