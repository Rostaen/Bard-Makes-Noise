<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/motherMingData.php");
$page = new Template();
$page->setTitle('Mother Ming | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Mother Ming</h1>
		<p>
			Formed on the 4th day of L&T 2001, Mother Ming (August 8, 2001-October 23rd 2003) was initially known as the Tewksbury Band, as all of the original members were residents and rehearsals were held daily in the common room. After an initial dorm room jam on the 8th, Mother Ming was asked to perform in Down the Road Cafe on the 9th when the scheduled band didn't show up. The following weeks saw the solidification of the core line-up: Gus Feldman (Guitar); Kyle Jaster (Bass); Akie Bermiss (Vocals and later Keyboards); Betsaida Alcantara (Vocals and Tambourine); and Elijah Tucker (Drums). For their first appearance in the Old Gym (9/16/01), they shared a bill with a hard-core band whose act included the lead singer pounding and subsequently vomiting up a 40oz.; as well as a band of middle-aged prog-rockers from Connecticut. Things could only get better, and they quickly did. 5-6 rehearsals a week (and an unusually sober group of individuals, at least while playing) gave the band a very solid foundation, and their funk and soul music became very popular on campus. Major gigs included the Rainbow Ball in the Old Gym, and slots opening for George Clinton in the MPR, and for The Slip at Spring Fling.
		</p>
		<p>
			Sophomore year saw the band continue rehearsing, though with a slightly reduced fervor. However, a packed Down The Road Cafe saw the band perform an acoustic show during Parents' Weekend, with a guest Harpist (Karen Trindle '06) and guest vocalist (Geoff Wilson '06). Geoff would later go on to become a member of the band on saxophone. A recording of this show was circulated widely on campus, and two tracks appeared as bonus tracks on the band's self-titled album. Said album was recorded during intercession in Blum Hall, and was released just as summer vacation began.
		</p>
		<p>
			The band returned to campus in the fall of '03 after spending the summer playing in and around New York City. After an L&T gig in Tivoli and a couple visits back to the Big Apple, the band played it's most massive (and final) Old Gym show. After beginning the show with the lights off, the band members wound their way through the crowd on to the stage and proceeded to play for 3 hours non-stop. This show provided the footage for Sam Mende-Wong's music video for the single "Feeling Better." The band then played in Down The Road for parent's weekend, which would be their final show. After this show, the band dissolved, though Geoff, Akie, Elijah and Kyle continued to play under various names for the next three years, releasing "White Space" under the name the Foundation in Summer '05. <i>[Written by Elijah Tucker]</i>
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying video section
		displayVideos($videoData);

		// Displaying music section
		displayMusic($musicData);
		?>
	</aside>
</div>

<?php
$page->close();
?>
