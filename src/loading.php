<?php


/**
 * @param integer $done
 * @param integer $total
 * @param int $size
 */
function show_status($done, $total, $size = 50) {

    $perc        = (double)($done/$total);
    $bar         = floor($perc*$size);
    $status_bar  = "\r[";
    $status_bar .= str_repeat("=", $bar);
    if($bar<$size)
    {
        $status_bar.=">";
        $status_bar.=str_repeat(" ", $size-$bar);
    }
    else
    $status_bar.="=";
    $disp = round($perc*100, 0);
    $status_bar .= "] $disp%  $done/$total";
    echo "$status_bar";
    flush();
    if($done == $total)
    {
        echo "\n SUCCES : $total Images concatenate\n";
    }
}