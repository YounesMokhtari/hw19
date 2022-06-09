<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'mmd',
            'email' => 'mmd@mmdi.com',
            'password' => 'mmdian'

        ]);
        User::create([
            'name' => 'mmd1',
            'email' => 'mmd1@mmdi.com',
            'password' => 'mmdian1'

        ]);
        User::create([
            'name' => 'amiro',
            'email' => 'amiro@amirol.com',
            'password' => 'amirloli'

        ]);
        User::create([
            'name' => 'youneso',
            'email' => 'youneso@younesi.com',
            'password' => 'younesian'

        ]);
    }
}
