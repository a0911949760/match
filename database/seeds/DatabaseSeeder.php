<?php

use Illuminate\Database\Seeder;
use App\usercare;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Userscare::class, 50)->create();
        factory(App\User::class, 50)->create();
        
    }
}
