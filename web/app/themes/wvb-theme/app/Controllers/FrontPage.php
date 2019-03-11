<?php

namespace App\Controllers;

use App\Controllers\Partials\LatestNewsArticles;
use Sober\Controller\Controller;

class FrontPage extends Controller
{
    use LatestNewsArticles;

    public function slider()
    {
        return $slider = get_field('homepagina_slider');
    }

}
