<?php

namespace App\Controllers;

use App\Helpers\Sportlink;
use Sober\Controller\Controller;

class TemplateFirstTeam extends Controller
{
    private $sportlink;

    public function __construct()
    {
        $this->sportlink = new Sportlink(get_field('sportlink_gegevens', get_queried_object_id()));
    }

    public function ranking()
    {
        return $this->sportlink->setTeamcode('161895')->getFileFromExternalLink('poulestand', 'team-ranking');
    }

    public function program()
    {
        return $program = get_field('Programma', 'option');
    }
}
