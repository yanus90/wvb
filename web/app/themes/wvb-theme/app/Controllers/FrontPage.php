<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function RecentPosts() {
        $args = array(
            'numberposts' => 3,
            'offset' => 0,
            'category' => 5,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
            'suppress_filters' => true
        );
        return wp_get_recent_posts($args);
    }

    public function slider()
    {
        return $slider = get_field('slider');
    }

}
