<?php

include("core/lib.php");

$HTMLQuery = new HQ;

print $HTMLQuery->label("Starting...");

$HTMLQuery->br(4);
print $HTMLQuery->hr(4, red);

print $HTMLQuery->label("Finished!");

?>
