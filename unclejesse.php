<?php
require_once("template.php");
include_once("bandPageFunctions.php");
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
		$videoData = [
			["Whiskey River", "https://drive.google.com/file/d/1Hkq8aluHix8O9s_51yJbeG1Gdn9Wdkj1/preview?usp=sharing"],
		];
		displayVideos($videoData);

		// Displaying Music section
		$musicData = [
			["Folsom Prison Blues", "https://drive.google.com/file/d/1qg2FNozJdii0M3mT6-qEiUqp06JaJgAE/preview?usp=sharing"],
			["Kiss My Ass", "https://drive.google.com/file/d/1JHM0CRK15JcVf9bWlcb8Hd5D0CTdrUlB/preview?usp=sharing"],
			["Whiskey River", "https://drive.google.com/file/d/1s_faKs9LI43F2YqjJpY4aoUY3QDxeLbs/preview?usp=sharing"],
		];
		displayMusic($musicData);

		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["unclejesse/RebelYell1.jpg", "Uncle Jesse live"],
			["unclejesse/RebelYell2.jpg", "Uncle Jesse live"],
			["unclejesse/RebelYell.jpg", "Uncle Jesse live"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>

<?php
// Displaying Modal Section
$modalData = [
	["Uncle Jesse live", "unclejesse/RebelYell1.jpg", "Uncle Jesse live"],
	["Uncle Jesse live", "unclejesse/RebelYell2.jpg", "Uncle Jesse live"],
	["Uncle Jesse live", "unclejesse/RebelYell.jpg", "Uncle Jesse live"],
];
displayModal($modalData);

$page->close();
?>
