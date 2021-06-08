<?php

use App\User_request;
use Illuminate\Database\Seeder;

class UserRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User_request::class, 1)->create();

    }
}
