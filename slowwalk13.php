<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/slowWalkData.php");
$page = new Template();
$page->setTitle('Slow Walk 13 | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Slow Walk 13</h1>
		<p>
			Early 1980s band with Mark Kirby (vocals and percussion), Marc Dale (bass), Bruce Huber (guitars), and Margot Day (vocals). Slow Walk 13 seemed to thrive on alienating their audience. Art Carlson remembers Slow Walk 13 as a: <span class="fst-italic">"Goth type metal band. Awful, everyone hated them. Margot shrieked at the audience. Marc performed with a veil over his face so no one knew who he was. They opened for the Beastie Boys, perhaps at Preston or Sottery" [from telephone interview 2008].</span>
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
