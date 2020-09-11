<?php
declare(strict_types=1);
/*
 * This class removes some endpoints from the wp rest api
 */

namespace TK_WORDPRESS_OPTIMIZER;

class Tk_WordPress_API
{
    public function __construct()
    {
        add_filter('rest_endpoints', [$this, 'removeAdminUserLeak']);
    }

    public function removeAdminUserLeak(array $endpoints): array
    {
        if (isset($endpoints['/wp/v2/users'])) {
            unset($endpoints['/wp/v2/users']);
        }
        if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
            unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
        }
        return $endpoints;
    }
}
