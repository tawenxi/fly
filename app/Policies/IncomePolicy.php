<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Income;

class IncomePolicy extends Policy
{
    public function update(User $user, Income $income)
    {
        //return $income->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Income $income)
    {
        return true;
    }
}
