<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/trollsData.php");
$page = new Template();
$page->setTitle('The Trolls | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>The Trolls</h1>
		<img src="https://www.bard.edu/bardmakesnoise/images/trolls/Trolls.jpg" class="float-end ps-3 pb-3" alt="The Trolls standing in front of brick wall" data-toggle="modal" data-target="#lsImg5">
		<p>
			The Trolls were Art Carlson on vocals, sax and trumpet; Mark Kirby on vocals and percussion; Marc Dale on bass; and Chris Cochrane on guitar - later Bruce A. Huber. According to Mark Kirby: "The Trolls were born in 1973 in the basement of Art's parents house, where we smoked weed, listened to Sun Ra, Eric Dolphy, Miles Davis, Jimi Hendrix, Frank Zappa and the Mothers of Invention, Captain Beefheart, and Stockhausen among others. We forged all this into music of sorts. Over time, during breaks from college and summers home, we kept playing in Art's house, sometimes Marc Dale's mom's house, keeping the dream of us high school buddies forming a band alive. The dream came alive in the Troll House on Broadway in Tivoli, where we jammed, smoked, I sold mushrooms, and Art cooked. Sometimes we even had jobs, especially Marc Dale. The Stooges' 'Fun House' became a major influence. Our songs were often made up on the spot, like during live shows. Or with a vague idea. Mostly we relied on Marc Dale's bass lines as an anchor and away we went." Read more about the Trolls in <a href="https://www.bard.edu/bardmakesnoise/pdfs/LightBardRock.pdf">The Light - Bard Rock Issue</a> (1981) and in <a href="https://www.bard.edu/bardmakesnoise/pdfs/Trolls.pdf">The Light-Observer</a> (March 1982).
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
