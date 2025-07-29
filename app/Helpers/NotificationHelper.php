<?php

namespace App\Helpers;

class NotificationHelper
{
    /**
     * Store a notification for a user.
     *
     * @param \App\Models\User $user
     * @param string $type
     * @param string $message
     * @param string $status
     * @param string $icon
     * @return void
     */
    // Change in trait
    public static function storeNotification($user, $type, $message, $status, $icon = 'ti ti-bell')
    {
        $user->notifications()->create([
            'type' => $type,
            'message' => $message,
            'status' => $status,
            'icon' => $icon,
        ]);
    }

    /**
     * Get all notifications for a user.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Database\Eloquent\Collection
     */

    public static function getUserNotifications($user)
    {
        return $user->notifications()->orderBy('created_at', 'desc')->get();
    }
}
