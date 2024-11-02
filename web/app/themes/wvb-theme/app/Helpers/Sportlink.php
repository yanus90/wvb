<?php

namespace App\Helpers;

class Sportlink
{
    private $teamcode;
    private $poulecode;
    private $poulecode_cup;

    public function __construct($sportlink_settings)
    {
        $this->teamcode = $sportlink_settings['sportlink_api_id'] ?? null;
        $this->poulecode = $sportlink_settings['sportlink_poulecode'] ?? null;
        $this->poulecode_cup = $sportlink_settings['sportlink_bekercode'] ?? null;
    }

    public function setTeamcode($teamcode)
    {
        $this->teamcode = $teamcode;

        return $this;
    }

    public function getFileFromExternalLink($type, $file_slug, $extra = null)
    {
        $file_path = get_template_directory()."/storage/{$file_slug}-{$this->teamcode}.json";

        $teamcode_full = '';
        if ($this->teamcode) {
            $teamcode_full = '&teamcode=' . $this->teamcode;
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
            file_put_contents($file_path, $json);
        } else {
            $file = file_get_contents($file_path);
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

        // Sla huidige waarden tijdelijk op
        $original_teamcode = $this->teamcode;
        $original_poulecode = $this->poulecode;

        // Zet naar specifieke team- en poulecode
        $this->teamcode = $specific_teamcode;
        $this->poulecode = $specific_poulecode;

        // Roep de bestaande functie aan
        $result = $this->getFileFromExternalLink($type, $file_slug, $extra);

        // Herstel de oorspronkelijke team- en poulecode
        $this->teamcode = $original_teamcode;
        $this->poulecode = $original_poulecode;

        return $result;
    }
}
