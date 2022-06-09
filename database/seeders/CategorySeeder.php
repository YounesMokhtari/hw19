<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Category::create([


            'category_name' => "کالای دیجیتال",

            'status' => "show"
        ]);
        Category::create([


            'category_name' => "موبایل",
            'category_parent' => 1,
            'status' => "show"
        ]);
        Category::create([


            'category_name' => "پوشاک",
            'status' => "show"
        ]);
        Category::create([


            'category_name' => "کفش",
            'category_parent' => 3,
            'status' => "show"
        ]);
        Category::create([


            'category_name' => "لپتاب ",
            'category_parent' => 1,
            'status' => "show"
        ]);
        Category::create([


            'category_name' => "بلندگو",
            'category_parent' => 1,
            'status' => "notShow"
        ]);
    }
}
