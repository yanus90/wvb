<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateCommissies extends Controller
{
    public function commissies()
    {
        $query = new \WP_Query([
            'post_type' => 'commissie',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'post_per_page' => -1
        ]);
        return $query->posts;
    }
}
