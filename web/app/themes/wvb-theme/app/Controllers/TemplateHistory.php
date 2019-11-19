<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateHistory extends Controller
{
    public function history()
    {
        $query = new \WP_Query([
            'post_type' => 'historie',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1
        ]);
        return $query->posts;
    }
}
