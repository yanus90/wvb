<?php

namespace App\Controllers\Partials;

use App\Helpers\DateHelper;
use Carbon\Carbon;

trait EventTrait
{
    public function events()
    {
        $now = Carbon::now();

        $query = new \WP_Query([
            'post_type' => 'evenement',
            'order' => 'DESC',
            'orderBy' => 'startdatum',
            'posts_per_page' => 4,
            'meta_query' => [
                [
                    'key' => 'einddatum',
                    'value' => $now->toDateTimeString(),
                    'compare' => '>=',
                    'type' => 'DATETIME'
                ]
            ]
        ]);

        $events = $query->posts;

        foreach ($events as $event) {
            $event->datum = (new DateHelper())->setDateString($event);
        }
        return $events;
    }
}