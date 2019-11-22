<?php

namespace App\Controllers;

use App\Controllers\Partials\Sportlink;
use Sober\Controller\Controller;

class TemplateFirstTeam extends Controller
{
    use Sportlink;

    public function program()
    {
        return $program = get_field('Programma', 'option');
    }

    public function ranking()
    {
        $file = get_template_directory().'/storage/team-ranking-161895.json';

        return $this->getFileFromExternalLink('poulestand', $file);
    }
}
