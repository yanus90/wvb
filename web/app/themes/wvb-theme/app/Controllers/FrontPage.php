<?php

namespace App\Controllers;

use App\Controllers\Partials\EventTrait;
use App\Controllers\Partials\LatestNewsArticles;
use App\Services\TwitterTweets;
use App\Controllers\Partials\SponsorOfTheMonth;
use Sober\Controller\Controller;
use App\Helpers\Sportlink;

class FrontPage extends Controller
{
    use LatestNewsArticles;
    use EventTrait;
    use SponsorOfTheMonth;

    private $sportlink;

    public function __construct()
    {
        add_action('wp', [$this, 'initializeSportlink']);
    }

    public function initializeSportlink()
    {
        if (function_exists('get_field')) {
            $this->sportlink = new Sportlink(\get_field('sportlink_gegevens', \get_queried_object_id()));
        } else {
            // Logging of een fallbackactie indien nodig
            error_log('ACF get_field() functie is niet beschikbaar');
        }
    }

    public function slider()
    {
        return \get_field('homepagina_slider', 'option');
    }

    public function sponsoren(): array
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
            'posts_per_page' => 13,
        ]);

        return $query->posts;
    }

    public function programHome()
    {
        $file = get_template_directory().'/storage/complete-club-program.json';

        return $this->sportlink->getFileFromExternalLink('programma', $file,'','&gebruiklokaleteamgegevens=NEE&eigenwedstrijden=JA&thuis=JA&uit=NEE');
    }

    public function programAway()
    {
        $file = get_template_directory().'/storage/complete-club-program.json';

        return $this->sportlink->getFileFromExternalLink('programma', $file,'','&gebruiklokaleteamgegevens=NEE&eigenwedstrijden=JA&thuis=NEE&uit=JA');
    }

    public function results()
    {
        $file = get_template_directory().'/storage/complete-club-results.json';

        return $this->sportlink->getFileFromExternalLink('uitslagen', $file, '', '&gebruiklokaleteamgegevens=NEE&sorteervolgorde=datum-omgekeerd&eigenwedstrijden=JA&thuis=JA&uit=JA');
    }

    public function tweets()
    {
        return (new TwitterTweets())->tweets();
    }

    public function notifications(): array
    {
        $query = new \WP_Query([
            'post_type' => 'melding',
            'order' => 'ASC',
            'orderby' => 'menu_order',
            'posts_per_page' => 1,
        ]);

        return $query->posts;
    }

    public function upcomingGameFirstTeam(): array
    {
        return $this->sportlink->getFileForSpecificTeamAndPoule('programma', 'team-program', 161895, 753086, '&aantalregels=1');
    }
}
