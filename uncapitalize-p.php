<?php
declare(strict_types=1);

/**
 * Plugin Name: Uncapitalize P
 * Description: Gives you the freedom to write «WordPress» as <em>you</em> want to. Disable Capital P Dangit.
 * Author:      Inpsyde GmbH
 * Author URI:  https://inpsyde.com
 * Version:     2.0.1
 * Licence:     GPLv2+
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
            'widget_text_content' => 11,
            'document_title' => 11,
        ];
        foreach ($filters as $filter => $priority) {
            remove_filter($filter, 'capital_P_dangit', $priority);
        }
    },
    11
);
