<?php

include("core/lib.php");

$HTMLQuery = new HQ;

print $HTMLQuery->label("Starting...");

$HTMLQuery->br(4);
print $HTMLQuery->hr(4, red);
print $HTMLQuery->div("This is text for div html tag", "left");
print $HTMLQuery->hr(4, red);

print $HTMLQuery->label("Finished!");

?>
