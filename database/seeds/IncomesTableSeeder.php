<?php

use Illuminate\Database\Seeder;
use App\Models\Income;

class IncomesTableSeeder extends Seeder
{
    public function run()
    {
        $incomes = factory(Income::class)->times(50)->make()->each(function ($income, $index) {
            if ($index == 0) {
                // $income->field = 'value';
            }
        });

        Income::insert($incomes->toArray());
    }

}

