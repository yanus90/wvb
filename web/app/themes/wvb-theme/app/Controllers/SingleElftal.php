<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleElftal extends Controller
{
    private $sportlink_settings;
    private $teamcode;
    private $poulecode;

    public function __construct()
    {
        $this->sportlink_settings = get_field('sportlink_gegevens', get_queried_object_id());
        
        $this->teamcode = $this->sportlink_settings['sportlink_api_id'] ?? null;
        $this->poulecode = $this->sportlink_settings['sportlink_poulecode'] ?? null;
    }

    public function ranking()
    {
        $file = get_template_directory().'/storage/team-ranking-'.$this->teamcode.'.json';
        
        return $this->getFileFromExternalLink($file);
    }

    public function period()
    {
        $period = [];

        $array = get_field('sportlink_gegevens', get_queried_object_id());
        $teamcode = $array['sportlink_api_id'] ?? null;
        $poulecode = $array['sportlink_poulecode'] ?? null;

        try {
            $json = file_get_contents('https://data.sportlink.com/periodestand?clientId=X5wbJgu0J7&poulecode=' . $poulecode);
        } catch (\Exception $e) {
            $json = null;
        }

        if ($json !== false) {
            $file = file_put_contents(get_template_directory().'/storage/team-period-'.$teamcode.'.json', $json);
        } else {
            $file = file_get_contents(get_template_directory().'/storage/team-period-'.$teamcode.'.json');
            $json = json_encode($file, true);
        }

        if ($json) {
            $period = json_decode($json, true);
        }

        return $period;
    }

    public function program()
    {
        $results = [];

        $array = get_field('sportlink_gegevens', get_queried_object_id());
        $teamcode = $array['sportlink_api_id'] ?? null;
        $poulecode = $array['sportlink_poulecode'] ?? null;

        try {
            $json = file_get_contents('https://data.sportlink.com/programma?clientId=X5wbJgu0J7&teamcode=' . $teamcode . '&poulecode=' . $poulecode);
        } catch (\Exception $e) {
            $json = null;
        }


        if ($json !== false) {
            $file = file_put_contents(get_template_directory().'/storage/team-program-'.$teamcode.'.json', $json);
        } else {
            $file = file_get_contents(get_template_directory().'/storage/team-program-'.$teamcode.'.json');
            $json = json_encode($file, true);
        }

        if ($json) {
            $results = json_decode($json, true);
        }

        return $results;
    }

    public function results()
    {
        $results = [];

        $array = get_field('sportlink_gegevens', get_queried_object_id());
        $teamcode = $array['sportlink_api_id'] ?? null;
        $poulecode = $array['sportlink_poulecode'] ?? null;

        try {
            $json = file_get_contents('https://data.sportlink.com/pouleuitslagen?clientId=X5wbJgu0J7&poulecode=' . $poulecode . '&weekoffset=-2');
        } catch (\Exception $e) {
            $json = null;
        }

        if ($json !== false) {
            $file = file_put_contents(get_template_directory().'/storage/team-results-'.$teamcode.'.json', $json);
        } else {
            $file = file_get_contents(get_template_directory().'/storage/team-results-'.$teamcode.'.json');
            $json = json_encode($file, true);
        }

        if ($json) {
            $results = json_decode($json, true);
        }

        return $results;
    }

    public function resultsCup()
    {
        $results_cup = [];

        $array = get_field('sportlink_gegevens', get_queried_object_id());
        $teamcode = $array['sportlink_api_id'] ?? null;
        $poulecode_cup = $array['sportlink_bekercode'] ?? null;

        try {
            $json = file_get_contents('https://data.sportlink.com/pouleuitslagen?clientId=X5wbJgu0J7&teamcode=' . $teamcode . '&poulecode=' . $poulecode_cup);
        } catch (\Exception $e) {
            $json = null;
        }

        if ($json !== false) {
            $file = file_put_contents(get_template_directory().'/storage/team-results-cup-'.$teamcode.'.json', $json);
        } else {
            $file = file_get_contents(get_template_directory().'/storage/team-results-cup-'.$teamcode.'.json');
            $json = json_encode($file, true);
        }

        if ($json) {
            $results_cup = json_decode($json, true);
        }

        return $results_cup;
    }
    
    private function getFileFromExternalLink($file_path) 
    {
        $results = [];

        try {
            $json = file_get_contents('https://data.sportlink.com/periodestand?clientId=X5wbJgu0J7&poulecode=' . $this->poulecode);
        } catch (\Exception $e) {
            $json = null;
        }

        if ($json !== false) {
            $file = file_put_contents($file_path, $json);
        } else {
            $file = file_get_contents($file_path);
            $json = json_encode($file, true);
        }

        if ($json) {
            $results = json_decode($json, true);
        }

        return $results;
    }

}
