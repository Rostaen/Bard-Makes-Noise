<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('Guppy Boy Grunt | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Guppy Boy Grunt</h1>
		<p>
			Guppy Boy Grunt featured David Baeumler on vocals, Jason Gusmann on drums and vocals, Ian Lamont-Havers on bass, and Chris (rupe) O'Neil on guitar. Chris O'Neil says:
		</p>
		<p>
			"I remember that we made a real effort to keep it simple. That first year, 1990 I met Dave Baeumler in a video class and Dave and Jason Gusmann knew each other growing up in Buffalo, NY. We were all film majors. I remember they more or less insisted on songs with all major chords, keep it melodic and accessible.
		</p>
		<p>
			Initially, GBG had a minimalist style, with Jason Gusmann playing only a snare and a floor tom for drums, (standing and singing.) And then me with an '86 Korean Strat thru a GK 250ML lunchbox with one twin 12 cab. I tried to fill as much space as I could. This put Dave B front center with just a lone mic for cover, (those Tewksbury parties could get dicey...) So, he would always be leaping around throwing things, crushing something or dodging thrown objects, generally making a spectacle of himself. His performances were hypnotizing. So dedicated. Highly athletic and entertaining.
		</p>
		<p>
			Later in 1991, Ian Lamont-Havers joined us on bass and that really crystallized everything. Ian's bass lines would drive the songs forward, with the guitar then able to be more versatile, (i.e. being quiet during the verses and then loud in the choruses, as opposed to before when the guitar was always loud.) Call it dynamics. The vocals and songwriting were really strength of the band and the focus. Dave and Jason writing the lyrics and singing. Both of them wrote these incredible layered lyrics and worked out 2-part harmonies. We managed to record most everything with a 4 track cassette recorder before the end, and I think the songs still hold up." <span class="fst-italic">[Email 2009]</span>
		</p>
	</section>
	<aside class="col-lg-4 pb-3">

		<?php
		$musicData = [
			["All Fall Down", "https://drive.google.com/file/d/1lGL9OL9WsbcCbWA-FKbhJ-slraVa6p5a/preview?usp=sharing"],
			["Captain of the Day", "https://drive.google.com/file/d/1j-WBkMOKl7VdIWz1Sp-A0fao6dKKrhdF/preview?usp=sharing"],
			["Hitch Hiker", "https://drive.google.com/file/d/1BBiW3PRCAJEnxMZYDv9UBoNHnnx8v5qT/preview?usp=sharing"],
		];
		displayMusic($musicData);

		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["gbg/GBG1.jpg", "Guppy Boy Grunt live on campus"],
			["gbg/GBG2.jpg", "Guppy Boy Grunt live on campus"],
			["gbg/GBG3.jpg", "Guppy Boy Grunt live on campus"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>

<?php
// Displaying Modal Section
$modalData = [
	["Guppy Boy Grunt live on campus", "gbg/GBG1.jpg", "Guppy Boy Grunt live on campus"],
	["Guppy Boy Grunt live on campus", "gbg/GBG2.jpg", "Guppy Boy Grunt live on campus"],
	["Guppy Boy Grunt live on campus", "gbg/GBG3.jpg", "Guppy Boy Grunt live on campus"],
];
displayModal($modalData);
$page->close();
?>
