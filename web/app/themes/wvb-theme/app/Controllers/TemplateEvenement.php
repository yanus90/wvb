<?php

namespace App\Controllers;

use App\Helpers\DateHelper;
use Sober\Controller\Controller;
use Carbon\Carbon;
use WP_Query;

class TemplateEvenement extends Controller
{
    private $eventsQuery;

    public function events()
    {
        $now = Carbon::now();

        $query = new \WP_Query([
            'post_type' => 'evenement',
            'order' => 'DESC',
            'orderBy' => 'startdatum',
            'posts_per_page' => 25,
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
            'meta_query' => [
                [
                    'key' => 'einddatum',
                    'value' => $now->toDateTimeString(),
                    'compare' => '>',
                    'type' => 'DATE'
                ]
            ]
        ]);

        $events = $query->posts;

        foreach ($events as $event) {
            $event->datum = (new DateHelper())->setDateString($event);
        }
        return $events;
    }

    public function eventsQuery()
    {
        return $this->eventsQuery;
    }
}
