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
}
