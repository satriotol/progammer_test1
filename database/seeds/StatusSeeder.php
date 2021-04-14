<?php

use App\status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        status::create([
            'name' => 'ready'
        ]);
        status::create([
            'name' => 'onhold'
        ]);
        status::create([
            'name' => 'delivered'
        ]);
        status::create([
            'name' => 'packing'
        ]);
        status::create([
            'name' => 'sent'
        ]);
    }
}
