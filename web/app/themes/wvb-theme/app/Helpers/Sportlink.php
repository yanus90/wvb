<?php

namespace App\Helpers;

class Sportlink
{
    private $teamcode;
    private $poulecode;
    private $poulecode_cup;
    private $cache_duration = 86400; // Cache duur in seconden (1 dag)

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
        $file_path = get_template_directory() . "/storage/{$file_slug}-{$this->teamcode}.json";

        // Controleer of cache bestand bestaat en nog geldig is
        if (file_exists($file_path) && (time() - filemtime($file_path)) < $this->cache_duration) {
            $json = file_get_contents($file_path);
        } else {
            // Bouw de URL op en haal de data van de externe link
            $teamcode_full = $this->teamcode ? '&teamcode=' . $this->teamcode : '';
            $poulecode_full = $this->poulecode ? '&poulecode=' . $this->poulecode : '';

            try {
                $json = file_get_contents('https://data.sportlink.com/' . $type . '?clientId=' . CLIENT_ID . $teamcode_full . $poulecode_full . $extra);
            } catch (\Exception $e) {
                $json = null;
            }

            // Cache het bestand als de data succesvol is opgehaald
            if ($json !== false) {
                file_put_contents($file_path, $json);
            } elseif (file_exists($file_path)) {
                // Gebruik het bestaande cachebestand als de nieuwe data niet kon worden opgehaald
                $json = file_get_contents($file_path);
            }
        }

        // Converteer JSON naar array als het beschikbaar is
        $results = $json ? json_decode($json, true) : [];

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
