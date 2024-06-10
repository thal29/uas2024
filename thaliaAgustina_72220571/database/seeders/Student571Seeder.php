<?php

namespace Database\Seeders;

use App\Models\Student571;
use Illuminate\Database\Seeder;

class Student571Seeder extends Seeder
{
    public function run()
    {
        Student571::factory()->count(100)->create();
    }
}
