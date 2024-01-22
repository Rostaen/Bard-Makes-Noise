<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/sparrowsData.php");
$page = new Template();
$page->setTitle('The Sparrows | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>The Sparrows</h1>
		<p>
			<a href="http://www.thesparrowsband.com/wordpress/">The Sparrows</a> are Perry Allen (Guitar/Vocals), Brian Barth (Bass/Vocals), Chris Rubeo (Guitar/Vocals/Piano), Dan Whitener (Banjo/Harmonica/Vocals/Guitar). They often include: Marta Shocket (Cello/Vocals).
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying video section
		displayVideos($videoData);

		// Displaying music section
		displayMusic($musicData);

		// Displaying Indicators, Images, and Controls
		displayCarousel($carouselData);
		?>
	</aside>
</div>
<?php
displayModal($modalData);

$page->close();
?>
