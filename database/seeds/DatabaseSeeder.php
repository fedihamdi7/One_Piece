<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserRequestsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(ClubsTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(Club_infosTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
