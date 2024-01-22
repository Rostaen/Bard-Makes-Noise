<?php
require_once("template.php");
include_once("bandPageFunctions.php");
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
		$musicData = [
			["Crappy Park", "https://drive.google.com/file/d/1rXSWvQ2j5YX4sxTVAMwZ7Cb7Xs9sShnB/preview?usp=sharing"],
			["Mouse Detective", "https://drive.google.com/file/d/13XzmZab3quQTqO_eLPHd9mNz6Gbd6a6w/preview?usp=sharing"],
			["Primer", "https://drive.google.com/file/d/17uRsYQkfd1m0eOZO3-aIOeCYMUjMavg7/preview?usp=sharing"],
		];
		displayMusic($musicData);

		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["spineless/Spineless7inch.jpg", "Spineless album on Make Out/Strike Out records"],
			["spineless/SpinelessCover.jpg", "Spineless album on Make Out/Strike Out records"],
			["spineless/SpinelessBack.jpg", "Spineless album on Make Out/Strike Out records"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>
<?php
// Displaying Modal Section
$modalData = [
	["Spineless album on Make Out/Strike Out records", "spineless/Spineless7inch.jpg", "Spineless album on Make Out/Strike Out records"],
	["Spineless album on Make Out/Strike Out records", "spineless/SpinelessCover.jpg", "Spineless album on Make Out/Strike Out records"],
	["Spineless album on Make Out/Strike Out records", "spineless/SpinelessBack.jpg", "Spineless album on Make Out/Strike Out records"],
];
displayModal($modalData);
$page->close();
?>
