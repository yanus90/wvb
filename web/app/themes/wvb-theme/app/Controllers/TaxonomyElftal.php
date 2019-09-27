<?php

namespace App\Controllers;

use App\Controllers\Partials\AllAfdelingen;
use Sober\Controller\Controller;

class TaxonomyElftal extends Controller
{
    public function players()
    {
        $query = new \WP_Query([
            'post_type' => 'speler',
            'orderby' => 'menu_order',
            'order' => 'DESC',
            'post_per_page' => -1
        ]);
        return $query->posts;
    }
}
