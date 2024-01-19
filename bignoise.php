<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('Big Noise | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Big Noise</h1>
		<p>
			The band began in 1980-81* when John Jacobs, Andrea Cairone and Brian "Buford" O'Sullivan started jamming out in Manor House sub-basement. They played their first gig billed as "Orange Crush" in Kline, featuring Buford painted orange with latex house paint. Initially, the band included Stu Wood on drums, but he was soon replaced with Nelson Bragg, a transfer student from Rockport, Mass. They also enlisted several horn players, including Art Carlson (from The Trolls), Dave Casey, and others. They changed their name to "Live Short and Suffer," and began to play gigs on campus for parties at Sottery [a.k.a. Sodomy] Hall, Kline Commons, and Cash's Music Bar, among others. Read more about Live Short and Suffer and other early 80s Bard bands in <a href="https://www.bard.edu/bardmakesnoise/pdfs/LightBardRock.pdf">The Light - Bard Rock Issue</a>. The band recorded several demos in Manor House sub-basement, including the hits "College Student", "Full Nelson", and "Inverted Population". As their popularity grew, they began to think more commercially, changing their name to Big Noise (referencing the big band Big Noise from Winnetka). Soon, their recording projects were deemed too small so they sought the talents of townie Paul Antonell and his studio located on the first floor of "The Hell House". They worked on perfecting the earlier recorded songs and also recorded new songs including "Oh Joe", "Falling Underground", "Ugh" and "Running On". As their educations progressed, they began playing clubs around the area; of note, Jacarusso's, where the horns would march through the crowd with an atonal fanfare. They enlisted Peter Buettner, alto sax player and vegetarian chef from The Creative Music Studio across the river, and his tenure lasted for the rest of the band's existence. They released their first single, "College "Student", on Antonell's indie label Black Sheep Records to critical success. Read <a href="https://www.bard.edu/bardmakesnoise/pdfs/bignoise.pdf">"Big Noise: Not Your Average Band"</a> from the May 21, 1984 Bard Observer.
		</p>
		<p>
			Upon graduation, the members decided to continue the band as a commercial vehicle, so they worked with several managers, including Greg Harris, a wine reseller from Ulster county, and then DJ Alex Miller, and his wife Stella. Wider audiences and bigger venues included NYC's CBGB's, The Cat Club and Hoboken's Maxwell's. Tenor sax veteran Ralph Carney was hired, and with this powerhouse lineup, they recorded a tape demo with songs including "Jumbo Town", "The Big Change", and "Reminiscing Girls". They also opened for The B-52s on Long Island, and X, Gang of Four, and Quarterflash at The Chance in Poughkeepsie. Andrea and Buford appeared on "The Joe Franklin Show", and the band recorded a MIDI project featured on a CBS/Epic compilation entitled "Presenting the Unsigned". Unfortunately things began to disassemble when Carney left the band due to other commitments. Soon after Nelson Bragg followed, and despite some efforts to regroup, Big Noise disbanded in the spring of 1987. Buford departed to New York City where he became a freelance musician; John Jacobs went on to pursue a lucrative career in insurance sales; Andrea Cairone married his long-time soul-mate Juliana; and Nelson Bragg moved around, playing with various bands until joining the Brian Wilson Band. Peter Buettner remained in Woodstock and continued playing alto sax with Carl Berger and others. [Adapted from Brian O'Sullivan's text on the Big Noise Myspace page.]
		</p>
		<p>
			*Randy Rabinowitz, '81 was not interviewed for this article but he was a key member of Big Noise early on. He played trumpet with Brian O'sullivan in the original horn section, and introduced Pete Buetner into the band.
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<section class="pb-3">
			<h2 class="pb-1">Music</h2>
			<?php
			$musicData = [
				["Full Nelson MP3", "https://drive.google.com/file/d/1dUZvl4MEU4lh0hdyFB-h6Ao5KrQa6jQK/preview?usp=sharing"],
				["Virgin's Delight MP3", "https://drive.google.com/file/d/1qnyCPZb7xd39YaUy6D63KTHODwn4TwwG/preview?usp=sharing"],
			];
			displayMusic($musicData);
			?>
		</section>
		<section>
			<h2 class="pb-1">Photos</h2>
			<div id="bigNoiseSlider" class="carousel" data-ride="carousel">

				<!-- Indicators -->
				<ul class="carousel-indicators">
					<?php carouselIndicators(15); ?>
				</ul>

				<!-- The slideshow -->
				<div class="carousel-inner">
					<?php
					$carouselData = [
						["bignoise/bignoiseposter.jpg", "Big Noise Flyer"],
						["bignoise/bignoise1.jpg", "Big Noise Live Performance"],
						["bignoise/bignoise-sottery.jpg", "Big Noise at Sottery"],
						["bignoise/bignoise2.jpg", "Big Noise live"],
						["bignoise/bignoise4.jpg", "Color photo of guitarist and drummer"],
						["bignoise/bignoise5.jpg", "Big Noise live"],
						["bignoise/bignoise6.jpg", "Promotional shots of Big Noise"],
						["bignoise/bignoise7.jpg", "Nelson Bragg live with Big Noise"],
						["bignoise/bignoise8.jpg", "Brian Buford OSullivan"],
						["bignoise/bignoise9.jpg", "Peter Buettner"],
						["bignoise/bignoise10.jpg", "Big Noise group rehearsal"],
						["showflyers/bignoiseposter1.jpg", "Show Flyer"],
						["showflyers/bignoiseposter2.jpg", "Show Flyer"],
						["showflyers/bignoiseposter3.jpg", "Show Flyer"],
						["showflyers/bignoiseposter4.jpg", "Show Flyer"],
					];
					displayImages($carouselData);
					?>
				</div>

				<!-- Left and right controls -->
				<?php carouselControls(); ?>

			</div>
		</section>
	</aside>
</div>
<?php
$modalData = [
	["Big Noise Flyer", "bignoise/bignoiseposter.jpg", "Big Noise Flyer"],
	["Big Noise Live Performance", "bignoise/bignoise1.jpg", "Big Noise Live Performance"],
	["Big Noise at Sottery", "bignoise/bignoise-sottery.jpg", "Big Noise at Sottery"],
	["Big Noise live", "bignoise/bignoise2.jpg", "Big Noise live"],
	["Big Noise live", "bignoise/bignoise4.jpg", "Color photo of guitarist and drummer"],
	["Big Noise live", "bignoise/bignoise5.jpg", "Big Noise live"],
	["Promotional shots of Big Noise", "bignoise/bignoise6.jpg", "Promotional shots of Big Noise"],
	["Nelson Bragg live with Big Noise", "bignoise/bignoise7.jpg", "Nelson Bragg live with Big Noise"],
	["Brian \"Buford\" O'Sullivan", "bignoise/bignoise8.jpg", "Brian Buford OSullivan"],
	["Peter Buettner", "bignoise/bignoise9.jpg", "Peter Buettner"],
	["Big Noise group rehearsal", "bignoise/bignoise10.jpg", "Big Noise group rehearsal"],
	["Show Flyer", "showflyers/bignoiseposter1.jpg", "Show Flyer"],
	["Show Flyer", "showflyers/bignoiseposter2.jpg", "Show Flyer"],
	["Show Flyer", "showflyers/bignoiseposter3.jpg", "Show Flyer"],
	["Show Flyer", "showflyers/bignoiseposter4.jpg", "Show Flyer"],
];
displayModal($modalData);

$page->close();
?>
