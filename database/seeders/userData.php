<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \app\Models\User;

class userData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->times(40)->create();
    }
}
