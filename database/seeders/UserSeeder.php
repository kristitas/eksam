<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Kristi';
        $user->email = 'kristitasuja@gmail.com';
        $user->password = bcrypt('Admin123');
        $user->save();
    }
}
