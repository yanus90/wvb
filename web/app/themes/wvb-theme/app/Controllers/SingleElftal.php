<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleElftal extends Controller
{
//    private $sportlink;
//
//    public function __construct()
//    {
//        $this->sportlink = get_field('sportlink_gegevens', get_queried_object_id());
//    }

    function ranking()
    {
        $ranking = [];

        $array = get_field('sportlink_gegevens', get_queried_object_id());
        $teamcode = $array['sportlink_api_id'] ?? null;
        $poulecode = $array['sportlink_poulecode'] ?? null;

        try {
            $json = file_get_contents('https://data.sportlink.com/poulestand?clientId=X5wbJgu0J7&poulecode=' . $poulecode);
        } catch (\Exception $e) {
            $json = null;
        }

        if ($json !== false) {
            $file = file_put_contents(get_template_directory().'/storage/team-ranking-'.$teamcode.'.json', $json);
        } else {
            $file = file_get_contents(get_template_directory().'/storage/team-ranking-'.$teamcode.'.json');
            $json = json_encode($file, true);
        }

        if ($json) {
            $ranking = json_decode($json, true);
        }

        return $ranking;
    }

    function period()
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

    function program()
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

    function results()
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

    function resultsCup()
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

}
