<?php

include("core/lib.php");

$HTMLQuery = new HQ;

print $HTMLQuery->label("Starting...");

$HTMLQuery->br(4);
$HTMLQuery->hr(4, red);

print $HTMLQuery->label("Finished!");

?>
