<?php

declare(strict_types = 1);

class Cal {

    public function execute(Time $time): int {
        $year = $time->getYear();
        $month = $time->getMonth();
        $day = $time->getDay();
        $hour = $time->getHour();
        $minute = $time->getMinute();
        $second = $time->getSecond();

        if ($month <= 2) {
            $year--;
            $month += 12;
        }


    }

}