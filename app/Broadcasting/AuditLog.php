<?php

namespace App\Broadcasting;

use App\Models\User;

class AuditLog
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */

    public function __construct()
    {
        //

    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \App\Models\User  $user
     * @return array|bool
     */
    public function join(User $user)
    {
        Log::info('User logged in with IP address', [
            'ip_address' => request()->ip(),
            'hostname' => request()->getClientIp(),
        ]);
    }

}
