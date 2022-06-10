<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'job_name'=>'enginer']
        );
        Job::create([
            'job_name'=>'doctor']
        );
        Job::create([
            'job_name'=>'nurse']
        );
        Job::create([
            'job_name'=>'mecanic']
        );
    }
}
