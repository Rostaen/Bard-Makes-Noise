<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('Virus | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Virus</h1>
		<p>
			From <a href="https://www.bard.edu/bardmakesnoise/pdfs/LightBardRock.pdf">The Light - Bard Rock Issue</a> (1981) written by Charlie Lenk: <span class="fst-italics">Virus was formed by [Art] Carlson and Mike Griffin, with the idea to play rock and roll that would relieve the constipated jazz-oriented musical scene at Bard. There were no other rock bands in existence in April '78, and Art and Mike figured that no matter how bad they played they were bound to get some appreciation. They were right. Their first gig was, technically, a musical disaster: Between the five songs that the band knew and had to play twice to stretch their set out, the fact that the band had only rehearsed three times before performing, the inexpertise of all the musicians involved (besides Art on vocal and sax and Mike on bass, there was Bob Fagen [Fagan] and Art Weinstein on guitars and Barry Bonnerwith on drums), Art's sickness from bad clams, and the band's drunkenness, there were enough reasons why the show should have been unmemorable on all counts. Instead of getting shoved offstage, however, Virus caused the audience to go wild: pogoing, rolling on the floor, and pouring beer on each other, the audience reacted more unreservedly than any had within Art's memory. "In the next week, we had about fifteen people ask to join us," he said. "We told them to go fuck themselves, just as they had when we first proposed starting a rock and roll band. They told us we were stupid to try it, and now they wanted to join. Some of them went off and formed the Twilites."</span>
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying Music section
		$musicData = [
			["Get Naked", "https://drive.google.com/file/d/1PgEHJl9aW3q5_t1DTYzAd-hFPRVgL51p/preview?usp=sharing", "Live at Bard 1977"],
			["Cynic in Love", "https://drive.google.com/file/d/1Xh89fwkpzXuSUsut1sXJkwjGB3FvnK_M/preview?usp=sharing", "Live at Bard 1977"],
		];
		displayMusic($musicData, 1);

		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["virus/virus.jpg", "Virus promotional still"],
			["virus/virusreunion1.jpg", "Virus reunion show 1999"],
			["virus/virusreunion2.jpg", "Virus reunion show 1999"],
			["showflyers/virus-reunion.jpg", "Show Flyer"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>

<?php
// Displaying Modal Section
$modalData = [
	["Virus promotional still", "virus/virus.jpg", "Virus promotional still"],
	["Virus reunion show 1999", "virus/virusreunion1.jpg", "Virus reunion show 1999"],
	["Virus reunion show 1999", "virus/virusreunion2.jpg", "Virus reunion show 1999"],
	["Show Flyer", "showflyers/virus-reunion.jpg", "Show Flyer"],
];
displayModal($modalData);

$page->close();
?>
