<?php

require "makeSprite.php";
require "function_args.php";

function 	check_args($argc, $argv)
{
    $name_sprite_output = "sprite.png";
    $name_css_output = "style.css";
    $pic = 1;
    if ($argc > 1) {
        $option = $argv[1];
        if ($option == "-r" || $option == "-recursive")
            $pic = my_scanDir($argv[2], true);
        else if (($option == "-i") || $name_sprite_output = substr($option, 0, 14) == "-output-image=")
        {
            $pic = output_sprite($argv,$name_sprite_output);
        }
        else if (($option == "-s") || substr($option, 0, 14) == "-output-style=")
        {
            $pic = output_css($argv, $name_css_output);
        }
        else if ($option == '-h' || $option == '-help')
            echo file_get_contents("man");
        else if (is_dir($option))
            $pic = my_scanDir($option, false);

        if (is_array($pic)) {
            merge_helper($pic, $name_sprite_output);
            css_generator($pic, $name_css_output);
        }

    }
    else
        echo "css_generator: missing directory operand
Try 'css_generator.php -help' for more information." . PHP_EOL;
}
check_args($argc, $argv);