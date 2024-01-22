<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('The Wow-wows | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>The Wow-wows</h1>
		<p>
			The Wow-Wows were an early 90s lo-fi band fronted by Aaron Meldahl on guitar and vocals, Jeremy Wilson on bass and Aaron Diskin (from <a href="bobafett.php">Boba Fett / Challenge of the Future</a>) on a home-made drum kit. Aaron Meldhal says that: "The Wow-wows name came from us adopting a disparaging term acquaintances of mine had used for people at Bard they considered shallow and obnoxious, ultimately from the Spalding Gray movie <em>Swimming to Cambodia</em>. I guess it was kind of a coded way of telegraphing the totally unserious way we approached 'being in a band,' which contained a strong Dada streak." Meldahl ascribes the formation of the band being sparked by Jeremy Wilson buying a bass, amp, and effects board off a "metalhead that we were working with at a haunted hayride down near New Paltz." That was in October 1993, and Aaron quickly got a dilapidated Airline guitar from a pawn shop in Kingston. The band started "jelling" (refusing to use the word "jam") in Jeremy's room, much to the dismay of his neighbors. Aaron Diskin - orphaned from Boba Fett while other members studied abroad - ended up in Jeremy's room and became the drummer by "playing along with keys, ashtrays and a metal rack." The Wow-Wows played their first gig at a house near Hudson within a week.
		</p>
		<p>
			Diskin assembled a continually morphing "trash kit" of "percussive items, such as cardboard boxes, metal scrap, and even cutlery stolen from the cafeteria." Aaron Meldahl says "originally this was just because we couldn't afford drums, but it came to typify our sound and philosophy." The Wow-Wows always included some kind of performance in their shows. Meldahl says that, "one time we constructed a giant red rabbit that Diskin did a parody of Mexican wrestling with. At a show at Red Hook High, we found some band uniforms and props behind the stage and Jeremy's girlfriend put together an outfit that made her look like a gigantic cockatoo and did an improvised dance piece to 'According to Hoyle.'" For their last show, Meldahl (with Nick Zinner's help) convinced the curator at the Black Center (Center for Curatorial Studies) to let them use the sunken loading dock at the back of the building to transform their "thin, tinny sound into something more powerful with what was basically a huge concrete amplifier." However, they were only able to perform one song, because the plan worked so well that a professor who lived in the woods directly across the field from the loading dock complained. Meldahl remembers: "He said his whole house was shaking, which to me was the entire point! We ended up having to get the crowd that had gathered to follow us to outside of the old performing arts building. Lit by blinding car lights, rattled by the change in plans, unable to hear each other out in the open area, we gave a terrible last show - still a disappointment to me after all these years, although I guess true to our spirit of amateurism."
		</p>
		<p>
			After recording their single - the <em>Quite Baroque EP</em> (recorded at least partially by John Morton in early 1994 and released by Ben Friedman on his Make Out/Strike Out label), the band began to falter despite Meldahl's being "happy with the way the recordings turned out; I thought they were faithful to how we sounded at the time, with just the right amount of rough charm." After Aaron Diskin went back to concentrating on Boba Fett/Challenge of the Future and graduation loomed, Meldahl's desire to continue the Wow-Wows wasn't enough to keep the band alive. Aaron Meldahl went on to do experimental electro-acoustic music on his own during the mid-90s and since 2000 has gotten into a rockabilly-inspired phase with his solo project - Hidetanner. He is currently in Tokyo organizing a band for a more "rock" side of the Hidetanner project billed as Son of Hidetanner. <em>[Excerpted from email January 2009]</em>
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying Music section
		$musicData = [
			["Dixie Rex", "https://drive.google.com/file/d/1OPoBHsSJoQd_YYr9P4JGo7NkFziMZzrM/preview?usp=sharing"],
		];
		displayMusic($musicData);

		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["wow-wows/WowWows7inch.jpg", "The Wow-wows <em>Quite Baroque</em> EP vinyl release"],
			["wow-wows/WowWows7inchFront.jpg", "The Wow-wows <em>Quite Baroque</em> EP vinyl release"],
			["wow-wows/WowWowsInsert.jpg", "The Wow-wows <em>Quite Baroque</em> EP vinyl release"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>

<?php
// Displaying Modal Section
$modalData = [
	["The Wow-wows <em>Quite Baroque</em> EP vinyl release", "wow-wows/WowWows7inch.jpg", "The Wow-wows <em>Quite Baroque</em> EP vinyl release"],
	["The Wow-wows <em>Quite Baroque</em> EP vinyl release", "wow-wows/WowWows7inchFront.jpg", "The Wow-wows <em>Quite Baroque</em> EP vinyl release"],
	["The Wow-wows <em>Quite Baroque</em> EP vinyl release", "wow-wows/WowWowsInsert.jpg", "The Wow-wows <em>Quite Baroque</em> EP vinyl release"],
];
displayModal($modalData);

$page->close();
?>
