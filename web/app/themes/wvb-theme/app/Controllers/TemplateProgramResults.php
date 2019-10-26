<?php

namespace App\Controllers;

use App\Helpers\DateHelper;
use Sober\Controller\Controller;
use Carbon\Carbon;
use WP_Query;

class TemplateProgramResults extends Controller
{
    function programHome()
    {
        $program_home = [];

        try {
            $json = file_get_contents('https://data.sportlink.com/programma?clientId='.CLIENT_ID.'&gebruiklokaleteamgegevens=NEE&eigenwedstrijden=JA&thuis=JA&uit=NEE');
        } catch (\Exception $e) {
            $json = null;
        }


        if ($json !== false) {
            $file = file_put_contents(get_template_directory().'/storage/full-program-home.json', $json);
        } else {
            $file = file_get_contents(get_template_directory().'/storage/full-program-home.json');
            $json = json_encode($file, true);
        }

        if ($json) {
            $program_home = json_decode($json, true);
        }

        return $program_home;
    }

    function programAway()
    {
        $program_away = [];

        try {
            $json = file_get_contents('https://data.sportlink.com/programma?clientId='.CLIENT_ID.'&gebruiklokaleteamgegevens=NEE&eigenwedstrijden=JA&thuis=NEE&uit=JA');
        } catch (\Exception $e) {
            $json = null;
        }


        if ($json !== false) {
            $file = file_put_contents(get_template_directory().'/storage/full-program-away.json', $json);
        } else {
            $file = file_get_contents(get_template_directory().'/storage/full-program-away.json');
            $json = json_encode($file, true);
        }

        if ($json) {
            $program_away = json_decode($json, true);
        }

        return $program_away;
    }

    function results()
    {
        $results = [];

        try {
            $json = file_get_contents('https://data.sportlink.com/uitslagen?clientId='.CLIENT_ID.'&gebruiklokaleteamgegevens=NEE&sorteervolgorde=datum-omgekeerd');
        } catch (\Exception $e) {
            $json = null;
        }


        if ($json !== false) {
            $file = file_put_contents(get_template_directory().'/storage/all-results.json', $json);
        } else {
            $file = file_get_contents(get_template_directory().'/storage/all-results.json');
            $json = json_encode($file, true);
        }

        if ($json) {
            $results = json_decode($json, true);
        }

        return $results;
    }

    function cup()
    {
        $cup = [];

        try {
            $json = file_get_contents('https://data.sportlink.com/programma?clientId='.CLIENT_ID.'&gebruiklokaleteamgegevens=NEE&eigenwedstrijden=JA&thuis=JA&uit=JA&competitiesoort=beker');
        } catch (\Exception $e) {
            $json = null;
        }


        if ($json !== false) {
            $file = file_put_contents(get_template_directory().'/storage/all-cup.json', $json);
        } else {
            $file = file_get_contents(get_template_directory().'/storage/all-cup.json');
            $json = json_encode($file, true);
        }

        if ($json) {
            $cup = json_decode($json, true);
        }

        return $cup;
    }
}
