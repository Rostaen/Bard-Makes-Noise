<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/velcroDildoData.php");
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
