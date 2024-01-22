<?php
require_once("template.php");
include_once("showFlyersData.php");
include_once("showFlyersFunctions.php");
$page = new Template();
$page->setTitle('Show Flyers | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();

displayAllFlyers($flyerData);

displayModal($flyerData);

$page->close();
