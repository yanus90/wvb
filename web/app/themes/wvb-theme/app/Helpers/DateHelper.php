<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    public function setDateString($event)
    {
        $datum = '';

        if ($event->startdatum) {
            $startdate = Carbon::parse($event->startdatum);

            if ($event->startdatum == $event->einddatum) {
                $datum .= strftime('%a. %e %b %Y', $startdate->timestamp);
                $datum .= ' - hele dag';
            } else {
                $enddate = Carbon::parse($event->einddatum);
                $datum = strftime('%a. %e %b %Y', $startdate->timestamp);
                $startdag = strftime('%e', $startdate->timestamp);
                $einddag = strftime('%e', $enddate->timestamp);
                $starttijd = strftime('%H.%M', $startdate->timestamp);
                $eindtijd = strftime('%H.%M', $enddate->timestamp);

                if (strftime('%b', $startdate->timestamp) == strftime('%b', $enddate->timestamp)) {
                    if (strftime('%Y', $startdate->timestamp) == strftime('%Y', $enddate->timestamp)) {
                        if ($startdag == $einddag) {
                            $datum = strftime('%a. %e %b %Y', $startdate->timestamp);
                            $datum .= " - $starttijd tot $eindtijd uur";
                        } else {
                            $datum = strftime('%a. %e', $startdate->timestamp) . ' tot ' . strftime('%a. %e %b %Y', $enddate->timestamp);
                        }
                    } else {
                        $datum = strftime('%a. %e %b %Y - %H.%M', $startdate->timestamp) . ' uur tot ' . strftime('%a. %e %b %Y - %H.%M', $enddate->timestamp) . ' uur';
                    }
                } else {
                    if ($startdag == $einddag) {
                        $datum .= " - $starttijd tot $eindtijd uur";
                    } else {
                        $datum = strftime('%a. %e %b %Y', $startdate->timestamp) . ' tot ' . strftime('%a. %e %b %Y', $enddate->timestamp);
                        $datum .= " - $starttijd tot $eindtijd uur";
                    }
                }
            }
        }
        if ($event->einddatum) {
            $date_end = Carbon::parse($event->einddatum);
            $event->end_date = strftime('%a. %e %b %Y', $date_end->timestamp);
        }

        return $datum;
    }
}