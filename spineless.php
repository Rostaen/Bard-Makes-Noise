<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/spinelessData.php");
$page = new Template();
$page->setTitle('Spineless | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Spineless</h1>
		<p>
			A three piece progressive/math rock band from the early 1990s that featured Sebastian Thomson, Stephen Budney and Matt Batista. They released a 7 inch single on Make Out/Strike Out records. After Bard, Sebastian Thomson achieved indie success with his band <a href="http://www.transband.com/">Trans Am</a>. In 2013, Thomson became the drummer for the heavy metal band <a href="https://yourbaroness.com/" target="_blank">Baroness</a>.
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
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
