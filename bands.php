<?php
require_once("template.php");
include_once("bandsFunctions.php");
include_once("bandsData.php");
$page = new Template();
$page->setTitle('Home | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();

// Printing Era Menu
printEraMenu();

// Printing bands from the 50s
loopThroughEra($bands1950Data, 1950);

// Printing bands from the 60s
loopThroughEra($bands1960Data, 1960);

// Printing bands from the 70s
loopThroughEra($bands1970Data, 1970);

// Printing bands from the 80s
loopThroughEra($bands1980Data, 1980);

// Printing bands from the 90s
loopThroughEra($bands1990Data, 1990);

// Printing bands from the 00s
loopThroughEra($bands2000Data, 2000);

$page->close();
