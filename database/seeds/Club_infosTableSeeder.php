<?php
use App\Club_info;
use Illuminate\Database\Seeder;

class Club_infosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Club_info::class, 1)->create();

    }
}
