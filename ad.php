<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/adData.php");
$page = new Template();
$page->setTitle('AD | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>

<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>AD</h1>
		<p>
			Anthony DeMore was the founder and lead vocalist of the hip-hop, metal band "AD". With lyrics driven by socio-politically and environmentally charged themes, the band found a new level of heaviness when David Tarica was added in 1989. With Tarica's monster guitar riffs and DeMore's potent raps, the band quickly became a Bard favorite. After graduation, the AD lineup changed and they moved to New York City securing a record deal with Rage Records. They toured all over Europe and recorded two CD’s before splitting up in the late 90s.
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying Music Data
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
