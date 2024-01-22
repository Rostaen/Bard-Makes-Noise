<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/stanHalenData.php");
$page = new Template();
$page->setTitle('Stan Halen | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Stan Halen</h1>
		<p>
			The Stan Halen Story: The Band, Mrs. Whitehead, was more than just a band; it was also an extended family. We hung out together, played together, and ate together at Kline. One day Chris Long was making a joke that Whitehead would be so big that Van Halen would soon be opening for us. This shifted into a series of jokes. Somewhere in there, I said it would be Stan Halen, not Van Halen. Stan Halen then took on the personality of a guy down the hall in Tewks, who played all the latest songs on his guitar, but all sounded the same. Further plays on this theme morphed into Stan Halen, playing the Hits, done country style, since 1908. At that point it was decided that this fictional band should be turned into the real thing... as a "spin off" of Whitehead.
		</p>
		<p>
			Soon Pat Hurley (Guitar/Vocals/Harmonica) Mike Hoffman (Violin/Vocals) and myself <span class="fst-italic">[Tom Pandaleon]</span> (Guitar/Vocals) started rehearsing songs by the Ramones, Sex Pistols, Talking Heads etc. with an Acoustic/Country feel. I even turned 'The Message', by Grand Master Flash (Rap was just starting at that point) into a country song. People loved the concept, probably more than the music, and after about a year together we were asked by Adam Yauch to open for the <a href="beastieboys.php">Beastie Boys</a> at Aldo's. They hadn't hit it big yet, but had a strong following, and we were happy to play before their set.
		</p>
		<p>
			The night of the show everything was going well until our final number, 'Oliver's Army', by Elvis Costello. Towards the end of the song the PA shorted out, but, rather than stop, we kept playing, with two Acoustic Guitars, an Amped Violin, and everybody in the room singing the cynical refrain "I would rather be anywhere else, than here today", for about 5 minutes. We finally finished the song, but the PA was dead, and The Beasties had to do their set without a sound system. <span class="fst-italic">[From Tom Pandaleon 2009]</span>
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying music section
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
