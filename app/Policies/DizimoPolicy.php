<?php

namespace App\Policies;

use App\User;
use App\Dizimos;
use Illuminate\Auth\Access\HandlesAuthorization;

class DizimoPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function Dizimo(User $user, Dizimos $dizimos)
    {
        return $user->id == $dizimos->user_id;
    }
}
