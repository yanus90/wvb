<?php

namespace App\Controllers;

use App\Controllers\Partials\AllAfdelingen;
use Sober\Controller\Controller;

class TemplateElftallen extends Controller
{
    use AllAfdelingen;

    public function elftallen()
    {
        $query = new \WP_Query([
            'post_type' => 'elftal',
            'orderby' => 'menu_order',
            'order' => 'DESC',
            'post_per_page' => -1
        ]);
        return $query->posts;
    }
}
