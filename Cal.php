<?php

declare(strict_types = 1);

class Cal {

    /**
     * @param Time $time
     * @return int(unix timestamp)
     */
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

        $kEpocDays = 719163;
        $kSecondsInDays = 86400;

        $countBy4 = $year / 4;
        $countBy400 = $year / 400;
        $countBy100 = $year / 100;

        $shiftedDay = (306 * ($month + 1)) / 10;
        $dayCount = (365 * $year + $countBy4 - $countBy100 + $countBy400 + $shiftedDay + $day - 428) - $kEpocDays;
        return $dayCount * $kSecondsInDays + ($hour * 3600) + ($minute * 60) + $second;
    }

}