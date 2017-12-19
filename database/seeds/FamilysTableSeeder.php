<?php

use Illuminate\Database\Seeder;
use App\Models\Family;

class FamilysTableSeeder extends Seeder
{
    public function run()
    {
        $familys = factory(Family::class)->times(50)->make()->each(function ($family, $index) {
            if ($index == 0) {
                // $family->field = 'value';
            }
        });

        Family::insert($familys->toArray());
    }

}

