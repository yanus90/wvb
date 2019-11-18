<?php

namespace App\Controllers;

use App\Controllers\Partials\EventTrait;
use App\Controllers\Partials\LatestNewsArticles;
//use App\Services\TwitterTweets;
use App\Controllers\Partials\SponsorOfTheMonth;
use App\Controllers\Partials\Sportlink;
use Sober\Controller\Controller;

class FrontPage extends Controller
{
    use LatestNewsArticles;
    use EventTrait;
    use Sportlink;
    use SponsorOfTheMonth;

    public function slider()
    {
        return $slider = get_field('homepagina_slider', 'option');
    }

    public function sponsoren()
    {
        $query = new \WP_Query([
            'post_type' => 'sponsor',
            'meta_query' => [
                [
                    'key'     => 'zichtbaar_op',
                    'value'   => 'homepage',
                    'compare' => 'LIKE',
                ]
            ],
            'order' => 'ASC',
            'orderby' => 'menu_order',
            'posts_per_page' => 12,
        ]);

        return $query->posts;
    }

    public function program()
    {
        $file = get_template_directory().'/storage/complete-club-program.json';

        return $this->getFileFromExternalLink('programma', $file,'','&gebruiklokaleteamgegevens=NEE&eigenwedstrijden=JA&thuis=JA&uit=JA');
    }

    public function results()
    {
        $file = get_template_directory().'/storage/complete-club-results.json';

        return $this->getFileFromExternalLink('uitslagen', $file, '', '&gebruiklokaleteamgegevens=NEE&sorteervolgorde=datum-omgekeerd&eigenwedstrijden=JA&thuis=JA&uit=JA');
    }

//    public function tweets()
//    {
//        return (new TwitterTweets())->tweets();
//    }
}
