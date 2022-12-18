<?php
chdir(dirname(__FILE__));

$gameVersion = $_POST["gameVersion"];

$has_custom_levels = 0;

if(!is_numeric($gameVersion)) {
    echo ("-2");
    exit("-2"); // Invalid game version
}

if($gameVersion != 21) {
    echo ("-3");
    exit("-3"); // Old client
}

if($has_custom_levels != 1) exit("-1"); // Check if levels are available, may be replaced with RobTop's level data
else {
    if(file_exists("../../data/GJLevelData.dat")){
        $leveldata = file_get_contents("../../data/GJLevelData.dat");
        echo ($leveldata);
        exit($leveldata);
    } else {
        echo ("-4");
        exit("-4"); // Does not exists
    }
}
?>