<?php

namespace App\Controllers;

use App\Controllers\Partials\AllAfdelingen;
use Sober\Controller\Controller;

class TaxonomyAfdeling extends Controller
{
    use AllAfdelingen;

    protected $template = 'taxonomy-afdeling';
    private $category;

    public function __construct()
    {
        $this->category = get_queried_object();
    }

    public function elftallen()
    {
        $query = new \WP_Query([
            'post_type' => 'elftal',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1,
            'tax_query' => [
                [
                    'taxonomy' => 'afdeling',
                    'field' => 'term_id',
                    'terms' => $this->category->term_id
                ]
            ]
        ]);
        return $query->posts;
    }
}
