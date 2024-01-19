<?php
require_once("template.php");
include_once("bandPageFunctions.php");
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
		<section class="pb-3">
			<h2 class="pb-1">Music</h2>
			<?php musicFile("Desire", "https://drive.google.com/file/d/19wubtX1n0SQly-W2t6y5YHyjVQURFxQS/preview?usp=sharing"); ?>
		</section>
		<?php
		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["sw13/SlowWalk13-Margot.jpg", "Margot Day - Slow Walk 13"],
			["sw13/SlowWalk13-Dale.jpg", "Marc Dale - Slow Walk 13"],
			["sw13/SlowWalk13-Kirby.jpg", "Mark Kirby - Slow Walk 13"],
			["sw13/SlowWalk13-Huber.jpg", "Bruce Huber - Slow Walk 13"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>
<?php
// Pop-up image links
$modalData = [
	["Margot Day - Slow Walk 13", "sw13/SlowWalk13-Margot.jpg", "Margot Day - Slow Walk 13"],
	["Marc Dale - Slow Walk 13", "sw13/SlowWalk13-Dale.jpg", "Marc Dale - Slow Walk 13"],
	["Mark Kirby - Slow Walk 13", "sw13/SlowWalk13-Kirby.jpg", "Mark Kirby - Slow Walk 13"],
	["Bruce Huber - Slow Walk 13", "sw13/SlowWalk13-Huber.jpg", "Bruce Huber - Slow Walk 13"],
];
displayModal($modalData);
$page->close();
?>
