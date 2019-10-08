<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleElftal extends Controller
{
    function ranking()
    {
        $ranking = [];
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
}
