<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/uncleJesseData.php");
$page = new Template();
$page->setTitle('Uncle Jesse | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Uncle Jesse</h1>
		<p>
			Formed in the 1990s, Uncle Jesse included: Erika "Pappy" Hughes (vocals), Ben Milstein (bass), A.J. Rein (vocals and guitar), Nathaniel Lee Smith (drums) and Sky Spooner (guitar). When the band first formed they gave performances under different names (including Rebel Yell), but eventually settled on Uncle Jesse. Thanks to Ben Milstein for the audio.
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying videos section
		displayVideos($videoData);

		// Displaying Music section
		displayMusic($musicData);

		// Displaying Indicators, Images, and Controls
		displayCarousel($carouselData);
		?>
	</aside>
</div>

<?php
// Displaying Modal Section
displayModal($modalData);

$page->close();
?>
