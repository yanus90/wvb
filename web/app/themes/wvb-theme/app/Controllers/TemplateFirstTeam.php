<?php

namespace App\Controllers;

use App\Helpers\Sportlink;
use Sober\Controller\Controller;

class TemplateFirstTeam extends Controller
{
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

    public function ranking()
    {
        return $this->sportlink->setTeamcode('161895')->getFileFromExternalLink('poulestand', 'team-ranking');
    }

    public function program()
    {
        return \get_field('Programma', 'option');
    }
}
