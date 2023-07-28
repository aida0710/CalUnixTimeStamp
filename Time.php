<?php

declare(strict_types = 1);

class Time {

    public function __construct(
        private readonly int $year,
        private readonly int $month,
        private readonly int $day,
        private readonly int $hour,
        private readonly int $minute,
        private readonly int $second,
    ) {
    }

    public function getYear(): int {
        return $this->year;
    }

    public function getMonth(): int {
        return $this->month;
    }

    public function getDay(): int {
        return $this->day;
    }

    public function getHour(): int {
        return $this->hour;
    }

    public function getMinute(): int {
        return $this->minute;
    }

    public function getSecond(): int {
        return $this->second;
    }

}