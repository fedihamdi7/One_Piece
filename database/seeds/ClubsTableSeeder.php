<?php
use App\Club;
use App\Department;
use App\User;
use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Club::class, 1)->create();
    }
}
