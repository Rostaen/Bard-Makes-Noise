<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/ramboCobData.php");
$page = new Template();
$page->setTitle('Rambo Cob | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Rambo Cob &amp; the Sheetrockers</h1>
		<p>
			Rambo Cob and the Sheetrockers' came into being sometime in 1985, an official “post-Bard band.” Members included Art Carlson, Bruce Huber, Lee Perry, and Steve Reid. According to Art, Mark Kirby may have been the original drummer, but he was replaced by Steve Reid pretty quickly. Most of the band members were in construction at the time, and the band's name referred to jobs that emphasized speed over care; thus, when they had to 'rambo' through a project, it became a 'cob job.' Could the Sheetrockers be far behind?
		</p>
		<p>
			The Hotel Rhinecliff was their favorite venue, though they also played at Sottery, Manor, Kline and “some place in the city”. Costumes included whatever available clothing happened to have the most paint. Rambo Cob lasted until 1987, and then morphed into 'Men of Religion,' a city based band that included Art, Brian O'Sullivan, Mark Kirby, David Casey, Marc Dale, Bruce Huber, and Lee Perry. <span class="fst-italic">[Paraphrased from phone interview with Art Carlson]</span>
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
