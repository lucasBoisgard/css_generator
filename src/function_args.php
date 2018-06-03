<?php
/**
 * Created by PhpStorm.
 * User: wac
 * Date: 5/29/18
 * Time: 4:20 PM
 */


// LOOK GET OPTION



function    output_sprite($option, &$output) {
    $pic = 1;
    if ($option[1] == "-i" && is_dir($option[2])) {
        if (count($option) == 4) {
            $output = ($option[2]);
            $pic = my_scanDir($option[3], false);
            }
        else {
            echo "Command error -i\nUsage : css_generator [-i] OUTPUT_SPRITE DIRECTORY\n";
        }
    }
    else if (substr($option[1], 0, 14) == "-output-image=") {

        if (count($option) == 3) {
            $output = (substr($option[1], 14));
            $pic = my_scanDir($option[2], false);
        }
        else {
            echo "Command error -output-image\nUsage : css_generator [-output-image=OUTPUT_SPRITE] DIRECTORY\n";
        }
    }
    return($pic);
}

function    output_css($option, &$output) {
    $pic = 1;
    if ($option[1] == "-s") {
        if (count($option) == 4) {
            $output = ($option[2]);
            $pic = my_scanDir($option[3], false);
        }
        else {
            echo "Command error -s\nUsage : css_generator [-s] OUTPUT_CSS DIRECTORY\n";
        }
    }
    else if (substr($option[1], 0, 14) == "-output-style=") {
        if (count($option) == 3) {
            $output = (substr($option[1], 14));
            var_dump($output);
            $pic = my_scanDir($option[2], false);
        }
        else {
            echo "Command error -output-style\nUsage : css_generator [-output-style=OUTPUT_CSS] DIRECTORY\n";
        }
    }
    return($pic);
}

/*function    padding() {

    return($pic);
}*/

/*function    resize() {

    return($pic);
}*/

/*function    columns() {

    return($pic);
}*/