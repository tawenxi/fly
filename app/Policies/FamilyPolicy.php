<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Family;

class FamilyPolicy extends Policy
{
    public function update(User $user, Family $family)
    {
        // return $family->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Family $family)
    {
        return true;
    }
}
