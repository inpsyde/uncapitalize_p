<?php
declare(strict_types=1);

/**
 * Plugin Name: Uncapitalize P
 * Description: Gives you the freedom to write «WordPress» as <em>you</em> want to.
 * Author:      Inpsyde GmbH
 * Author URI:  http://inpsyde.com
 * Version:     dev-master
 * Licence:     MIT
 */

namespace Inpsyde\UncapitalizeP;

add_action(
    'plugins_loaded',
    function () {
        $filters = [
            'wp_title' => 11,
            'the_title' => 11,
            'the_content' => 11,
            'comment_text' => 31,
        ];
        foreach ($filters as $filter => $priority) {
            remove_filter($filter, 'capital_P_dangit', $priority);
        }
    },
    11
);
