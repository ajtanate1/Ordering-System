<?php

use App\User;
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
        $user= factory(User::class)->create([
            'email' => 'admin@gmail.com'
        ]);
        $user->assignRole('admin');

        $user= factory(User::class)->create([
            'email' => 'staff@gmail.com'
        ]);
        $user->assignRole('staff');
    }
}
