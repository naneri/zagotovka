<?php

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
        factory(User::class)->create([
            'name'  => 'Kanat Tabaldiev',
            'email' => 'ktnaneri@gmail.com',
        ]);

        factory(User::class, 5)->create();
    }
}
