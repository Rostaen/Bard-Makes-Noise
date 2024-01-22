<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/suedewicked.php");
$page = new Template();
$page->setTitle('Suede Wicked | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Suede Wicked</h1>
		<p>
			A popular band from the late 80's, Suede Wicked was Lon Clark (guitar), David Martinez (vocals), Bill Bronson (bass) and Thomas Crofts (drums).
		</p>
		<p>
			Audio provided by Brennan Cavanaugh ('88) and Seth Buncher ('88).
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying music section
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
