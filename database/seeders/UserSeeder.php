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
            'first_name' => 'mmd',
            'last_name' => 'panh',
            'email' => 'mmd@mmdi.com',
            'city' => 'teh',


        ]);
        User::create([
            'first_name' => 'mmd1',
            'last_name' => 'panh',
            'city' => 'teh',

            'email' => 'mmd1@mmdi.com',

        ]);
        User::create([
            'first_name' => 'amiro',
            'last_name' => 'panh',
            'city' => 'teh',

            'email' => 'amiro@amirol.com',

        ]);
        User::create([
            'first_name' => 'youneso',
            'last_name' => 'panh',
            'city' => 'teh',

            'email' => 'youneso@younesi.com',

        ]);
    }
}
