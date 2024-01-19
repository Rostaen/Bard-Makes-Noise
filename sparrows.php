<?php
require_once("template.php");
include_once("bandPageFunctions.php");
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
		<section class="mb-3">
			<h2 class="mb-1">Videos</h2>
			<?php videoFile("Bard Hall 2008", "https://drive.google.com/file/d/1tdA_lymxTmBecUEpkle4_jZGiOOYfwbH/preview?usp=sharing"); ?>
		</section>
		<section class="pb-3">
			<h2 class="pb-1">Music</h2>
			<?php musicFile("The Day Will Come", "https://drive.google.com/file/d/1HGtIaOjizLIGnpQ8m2sYrX4OqEvypJv9/preview?usp=sharing"); ?>
		</section>
		<?php
		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["sparrows/sparrows1.jpg", "The Sparrow promotional photo"],
			["sparrows/sparrows2.jpg", "The Sparrows live"],
			["sparrows/sparrows3.jpg", "The Sparrows live"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>
<?php
$modalData = [
	["The Sparrow promotional photo", "sparrows/sparrows1.jpg", "The Sparrow promotional photo"],
	["The Sparrows live", "sparrows/sparrows2.jpg", "The Sparrows live"],
	["The Sparrows live", "sparrows/sparrows3.jpg", "The Sparrows live"],
];
displayModal($modalData);
$page->close();
?>
