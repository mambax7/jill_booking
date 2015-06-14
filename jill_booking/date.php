<?php
/**
 *
 * @authors Your Name (you@example.org)
 * @date    2015-01-08 13:44:23
 * @version $Id$
 */
$start_date = "2015-03-01";
$end_date   = "2015-03-31";
/**
 * @param string $seed_weekday
 * @param string $start_date
 * @param string $end_date
 * @return array
 */
function getdateArr($seed_weekday = "", $start_date = "", $end_date = "") {
    list($y, $m, $d) = explode("-", $start_date);
    $now = 0;
    $end = strtotime($end_date);
    $i   = 0;
    while ($now < $end) {
        $now = mktime(0, 0, 0, $m, $d + $i, $y);
        if (in_array(date('w', $now), $seed_weekday)) {
            $date_arr[] = date("Y-m-d", $now);
        }
        ++$i;
    }

    return $date_arr;
}

$week_days = date('w');
$sunday    = strtotime('-' . ($week_days) . ' days');
//echo date('Y-m-d H:i:s',$monday);
echo(date('Y-m-d H:i:s', strtotime("last Sunday")));
echo(date('Y-m-d H:i:s', strtotime("Sunday")));
echo(date('Y-m-d H:i:s', strtotime("next Sunday")))
    //$last_sunday = date('Y-m-d H:i:s', strtotime('-1 week', $sunday));
    //die("fds".$last_monday);
    //var_dump(getdateArr(array("4"),$start_date,$end_date));
;
