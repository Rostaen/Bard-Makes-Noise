<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('Velcro Dildo | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Velcro Dildo</h1>
		<p>
			Late 80s band that featured Ross Shain (bass), David Tarica (drums), Stephen Sollins (guitar) and 'Roy'. The horn section was made up of Derek Brain and Fran and Michael Allison. David Tarica recalls: <span class="fst-italic">"Roy's name is Mark Lumadue. First "the trees that say ooh" played goth/new wave, joined guitarist Matt Hill to form a metal band, and got turned around after the Red Hot Chili Peppers played Kline [<a href="https://www.bard.edu/bardmakesnoise/images/rhcp-kline.jpg">View pic of RHCP at Kline</a>]. Roy joined with his high school poetry book. Horn section "three feet of dead intestine" joined later. Also, we placed last in Marist's battle of the bands, scoring a zero in originality though we were the only band to play any original music."</span>
		</p>
		<p>
			Audio was provided by Seth Buncher ('88).
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying Music section
		$musicData = [
			["Beef, Bitch, Band, Beer", "https://drive.google.com/file/d/1JKLYcH6kJa96AWrxl-uMWzH7g7OMkvxg/preview?usp=sharing"],
			["Clueless", "https://drive.google.com/file/d/1v9oAk3HcUnNywdic_0h5T-NBdvdry0GZ/preview?usp=sharing"],
			["Funky Fish", "https://drive.google.com/file/d/14CfDk7tDWpMbF_McbcSsAOsDalBpz3D6/preview?usp=sharing"],
			["Grendahl's Lair", "https://drive.google.com/file/d/1kQcGq3D8-0ib2Ly_V08p53_Z2Ceaogsq/preview?usp=sharing"],
			["Hot Chevy", "https://drive.google.com/file/d/1Jzo55SLJPrFIjR_qgawXrw7d37qZro4I/preview?usp=sharing"],
			["Life Sucks", "https://drive.google.com/file/d/1Q87nZZB2iJB76JOvYy0XSjD3ZzAXCvq5/preview?usp=sharing"],
			["Roy Is, Butt", "https://drive.google.com/file/d/1SIGKZqgGKnnokiSvdeUoN5HbT152wofd/preview?usp=sharing"],
			["Skin You Cat", "https://drive.google.com/file/d/1Y8x4IoKmwwBOp1cmwBnzU4ZubeMglnem/preview?usp=sharing"],
			["Title Sequence", "https://drive.google.com/file/d/1p9BJoHMf4FozeaczxG1a-eBvAZyYEiGf/preview?usp=sharing"],
			["Truth Is", "https://drive.google.com/file/d/13G0AqdMXl4YvCTNiEMEmbZJgqDZnYtQ6/preview?usp=sharing"],
		];
		displayMusic($musicData);

		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["velcrodildo/roy.jpg", "Photo of Roy"],
			["velcrodildo/velcrodildo1.jpg", "Velcro Dildo promotional shot"],
			["velcrodildo/velcrodildo2.jpg", "Velcro Dildo live"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>

<?php
// Displaying Modal Section
$modalData = [
	["Photo of Roy", "velcrodildo/roy.jpg", "Photo of Roy"],
	["Velcro Dildo promotional shot", "velcrodildo/velcrodildo1.jpg", "Velcro Dildo promotional shot"],
	["Velcro Dildo live", "velcrodildo/velcrodildo2.jpg", "Velcro Dildo live"],
];
displayModal($modalData);

$page->close();
?>
