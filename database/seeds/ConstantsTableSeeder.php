<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ConstantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Base User Accounts
         */
        // Mike's account
        $michael = User::create([
            'name'       => 'Michael Norris',
            'email'      => 'qq@gmail.com',
            'password'   => bcrypt('qq'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        factory(App\Models\Flyer::class, 30)->create();
    }
}
//