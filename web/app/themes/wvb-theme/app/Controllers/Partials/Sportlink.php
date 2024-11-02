<?php

namespace App\Controllers\Partials;

trait Sportlink
{
    private $sportlink_settings;
    private $teamcode;
    private $poulecode;
    private $poulecode_cup;

    private function getFileFromExternalLink($type, $file_path, $teamcode = null, $extra = null)
    {
        $teamcode_full = '';
        if ($teamcode) {
            $teamcode_full = '&teamcode=' . $teamcode;
        }

        $poulecode_full = '';
        if ($this->poulecode) {
            $poulecode_full = '&poulecode=' . $this->poulecode ?? null;
        }

        $results = [];

        try {
            $json = file_get_contents('https://data.sportlink.com/'.$type.'?clientId='. CLIENT_ID .''. $teamcode_full .'' . $poulecode_full . '' . $extra);
        } catch (\Exception $e) {
            $json = null;
        }

        if ($json !== false) {
            $file = file_put_contents($file_path, $json);
        } else {
            $file = file_get_contents($file_path);
//            $file = false;
            $json = is_array($file) ? json_encode($file, true) : $file;
        }

        if ($json) {
            $results = json_decode($json, true);
        }

        return $results;
    }

    public function getFileForSpecificTeamAndPoule($type, $file_slug, $teamcode = null, $poulecode = null, $extra = null)
    {
        // Specifieke team- en poulecoden voor deze functie
        $specific_teamcode = $teamcode;
        $specific_poulecode = $poulecode;

        $this->teamcode = $specific_teamcode;
        $this->poulecode = $specific_poulecode;

        // Roep de bestaande functie aan
        $result = $this->getFileFromExternalLink($type, $file_slug, $teamcode, $extra);

        return $result;
    }
}
