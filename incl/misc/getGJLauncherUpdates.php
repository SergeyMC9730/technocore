<?php
require_once "../incl/lib/exploitPatch.php";

$gameVersion = ExploitPatch::remove($_POST["gameVersion"]);

$toUpdate21 = 0;

if(!is_numeric($gameVersion)) {
    exit("-2"); // Invalid game version
}

if($gameVersion != 21) {
    exit("-3"); // Old client
}

if($toUpdate21 != 1) exit("-1"); // No updates available
else {
    exit("0");
}
?>