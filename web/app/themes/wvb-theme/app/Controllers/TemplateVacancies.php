<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateVacancies extends Controller
{
    public function vacancies()
    {
        $query = new \WP_Query([
            'post_type' => 'vacature',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1
        ]);
        return $query->posts;
    }
}
