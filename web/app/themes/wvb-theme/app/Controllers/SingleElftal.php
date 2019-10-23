<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleElftal extends Controller
{
    private $sportlink_settings;
    private $teamcode;
    private $poulecode;
    private $poulecode_cup;

    public function __construct()
    {
        $this->sportlink_settings = get_field('sportlink_gegevens', get_queried_object_id());
        
        $this->teamcode = $this->sportlink_settings['sportlink_api_id'] ?? null;
        $this->poulecode = $this->sportlink_settings['sportlink_poulecode'] ?? null;
        $this->poulecode_cup = $this->sportlink_settings['sportlink_bekercode'] ?? null;
    }

    public function ranking()
    {
        $file = get_template_directory().'/storage/team-ranking-'.$this->teamcode.'.json';

        return $this->getFileFromExternalLink('poulestand', $file);
    }

    public function period()
    {
        $file = get_template_directory().'/storage/team-period-'.$this->teamcode.'.json';

        return $this->getFileFromExternalLink('periodestand', $file);
    }

    public function program()
    {
        $file = get_template_directory().'/storage/team-program-'.$this->teamcode.'.json';

        return $this->getFileFromExternalLink('programma', $file, $this->teamcode, '');
    }

    public function results()
    {
        $file = get_template_directory().'/storage/team-results-'.$this->teamcode.'.json';

        return $this->getFileFromExternalLink('pouleuitslagen', $file, '&weekoffset=-2');
    }

//    public function resultsCup()
//    {
//        $file = get_template_directory().'/storage/team-results-cup-'.$this->teamcode.'.json';

//        return $this->getFileFromExternalLink('pouleuitslagen', $file, $this->teamcode, '&poulecode=' . $this->poulecode_cup);

//        $results_cup = [];
//
//        try {
//            $json = file_get_contents('https://data.sportlink.com/pouleuitslagen?clientId='.CLIENT_ID.'&teamcode=' . $this->teamcode . '&poulecode=' . $this->poulecode_cup);
//        } catch (\Exception $e) {
//            $json = null;
//        }
//
//        if ($json !== false) {
//            $file = file_put_contents(get_template_directory().'/storage/team-results-cup-'.$this->teamcode.'.json', $json);
//        } else {
//            $file = file_get_contents(get_template_directory().'/storage/team-results-cup-'.$this->teamcode.'.json');
//            $json = json_encode($file, true);
//        }
//
//        if ($json) {
//            $results_cup = json_decode($json, true);
//        }
//
//        return $results_cup;
//    }
    
    private function getFileFromExternalLink($type, $file_path, $teamcode = null, $extra = null)
    {
        $teamcode_full = '&teamcode=' . $teamcode ?? null;
        $results = [];

        try {
            $json = file_get_contents('https://data.sportlink.com/'.$type.'?clientId='. CLIENT_ID .''. $teamcode_full .'&poulecode=' . $this->poulecode . '' . $extra);
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
