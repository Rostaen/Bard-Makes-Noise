<?php
require_once("template.php");
include_once("bandPageFunctions.php");
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
		$musicData = [
			["Louie Seize", "https://drive.google.com/file/d/1ftGLDfAMSxVia8TvC_x23ggPIuWMqiOg/preview?usp=sharing"],
			["Softly I Remember Laura", "https://drive.google.com/file/d/1no0mXChNCgx-XubjahBJPF7ksAlkIYnZ/preview?usp=sharing"],
		];
		musicFileWithSubtitle("Bit by the Rabid Vengeance of a Woman Gone Wild", "https://drive.google.com/file/d/13E3T79_hH4TAdiV1vZLdBC4m4a6dZzZy/preview?usp=sharing", "Live @ The Rhinecliff Hotel - Febraury 21, 1987");
		displayMusic($musicData);

		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["rambocob/Rambo1.jpg", "Rambo Cob & the Sheetrockers live"],
			["rambocob/rambocob2.jpg", "Rambo Cob & the Sheetrockers live"],
			["rambocob/Rambo3.jpg", "Rambo Cob & the Sheetrockers live"],
			["rambocob/Rambo4.jpg", "Rambo Cob & the Sheetrockers live"],
			["showflyers/rambocob2.jpg", "Show Flyer"],
			["showflyers/rambocob1.jpg", "Show Flyer"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>
<?php
// Displaying Modal Section
$modalData = [
	["Rambo Cob & the Sheetrockers live", "rambocob/Rambo1.jpg", "Rambo Cob & the Sheetrockers live"],
	["Rambo Cob & the Sheetrockers live", "rambocob/rambocob2.jpg", "Rambo Cob & the Sheetrockers live"],
	["Rambo Cob & the Sheetrockers live", "rambocob/Rambo3.jpg", "Rambo Cob & the Sheetrockers live"],
	["Rambo Cob & the Sheetrockers live", "rambocob/Rambo4.jpg", "Rambo Cob & the Sheetrockers live"],
	["Show Flyer", "showflyers/rambocob2.jpg", "Show Flyer"],
	["Show Flyer", "showflyers/rambocob1.jpg", "Show Flyer"],
];
displayModal($modalData);
$page->close();
?>
