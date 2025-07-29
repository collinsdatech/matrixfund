<?php

namespace App\Helpers;

class PlatformHelper
{
    public static function formatLink($url)
    {
        return strpos($url, 'http') === 0 ? $url : 'https://' . $url;
    }

    public static function statusBadge($status)
    {
        return $status ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-secondary">Inactive</span>';
    }
}

