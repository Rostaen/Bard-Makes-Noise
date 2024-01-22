<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/saintBootyData.php");
$page = new Template();
$page->setTitle('Saint Booty | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8 pb-3">
		<h1>Saint Booty</h1>
		<p>
			Featured were Ian Zimmerman (vocals), Jody Cornish (vocals), Ross Shain (bass), Ted Gannon (guitar), Rob Brunner (drums), Zach Smith (keyboards), Derek Brain (trumpet), John Durham (saxophone), Andy West (trombone), and Dave Tarica (part-time percussion player). Before Saint Booty, these musicians were in various Bard bands including Pimp Daddy, Vick Vegas and Velcro Dildo.<em> Audio files provided by Mike Parker.</em>
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Diplaying video section
		displayVideos($videoData);

		// Displaying music section
		displayMusic($musicData);

		// Displaying Indicators, Images, and Controls
		displayImages($carouselData);
		?>
	</aside>
</div>
<?php
// Displaying Modal Section
displayModal($modalData);

$page->close();
?>
