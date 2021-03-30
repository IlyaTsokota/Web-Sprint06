<?php namespace Space\Normal;

function calculate_time() {
    $date_now = date_create("NOW");
    $date_old = date_create("01.01.1939");
    return  date_diff($date_now,$date_old);
}