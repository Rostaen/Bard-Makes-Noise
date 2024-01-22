<?php
require_once("template.php");
include_once("bandPageFunctions.php");

$page = new Template();
$page->setTitle('1973 | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>1973</h1>
		<p>
			Excerpted from March 9th, 1989 Bard Observer -- <a href="https://www.bard.edu/bardmakesnoise/pdfs/1973.pdf">1973: An Interview Exclusive</a> by Robin Cook:
		</p>
		<p>
			1973 is a band enamored of the past. The face of the 1970s icon Barry Manilow adorns a clock in the Rhinebeck abode of Jane Brien and Lauren McMahon, who are, respectively, 1973s singer and accordionist. Also on hand was the band's bassist, Laura Stout, and photographer, Fran Soosman.
		</p>
		<p>
			1973 was formed in late 1987. “I came back from a very luxurious vacation on the shores of Sicily,” McMahon recalled, “and I was thinking, "Gosh, wouldn't it be good to get a band together?"" I just wanted to say something about music…but I didn't want to be serious about it, and thought, Wow? A 70s cover band would be good.”
		</p>
		<p>
			Thus, McMahon formed 1973 upon her return to America. The original personnel, consisting of McMahon, Brien, Holly Brown (guitar), Melanie Chapman (bass) and Raissa St. Pierre (drums) played its first gig at the Rhinecliff Hotel in September of 1987, opening for the Electric Jellyfish. There they met their soon-to-be guitarist, Markus Olin-Fahle. “It was a terrible scene,” Olin-Fahle recalls, “but I really liked them a lot. They asked me to join after I told them how much I liked them, and I eagerly accepted.”
		</p>
		<p>
			Olin-Fahle's first show with the band was on October 30, 1987, at the apartment that Brien and McMahon shared in Tivoli. Friends turned out in hot pants and bellbottoms to celebrate the arrival of a new music force on the Bard music scene. But, why the name 1973?
		</p>
		<p>
			Brien stated, “We wanted to go for the 70s; the 70s is our ideal…and we all started thinking, '71's too early; '71 we were six, seven, eight…that's too young. '75's in the middle of the decade, and then '77, disco and punk… '79 was a bummer. So I think '73 seemed to be the only year we could really pick.”
		</p>
		<p>
			“Fun was our main idea, she said. “We had a philosophy that we would not take ourselves seriously…”
		</p>
		<p>
			“The group performs a wide variety of original interpretations of 70s songs, including a medley of “Mandy” and “Angie,” entitled “Mangie.” “We perform Paul Anka, Helen Reddy, Neil Sedaka, Terry Jacks, David Essex, Barry Manilow,” said Brien. “The kind of songs I wanted to choose were songs that, when you started to hear us play it, you would say, “Oh no, I hated that song!'”…
		</p>
		<p>
			In the future, the band members predict that they will abandon rehearsals. “We're beyond rehearsals. We're an improv band,” said McMahon.
		</p>
		<p>
			“Even last semester, we didn't need rehearsals,” Sollins added.
		</p>
	</section>
	<aside class="col-lg-4 pb-3">

		<?php
		musicFile("Afternoon Delight", "https://drive.google.com/file/d/1ZVcIl59518mk_nMY_GwFliioZfpxw8cL/preview?usp=sharing");

		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["1973/1973a.jpg", "1973 live in the late 80s"],
			["1973/1973b.jpg", "1973 live in Kline Commons"],
			["1973/1973poster3.jpg", "1973 Poster"],
			["showflyers/1973poster.jpg", "Show Flyer"],
			["showflyers/1973poster2.jpg", "Show Flyer"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>

<!-- Flyer -->
<?php
// Displaying Modal Section
$modalData = [
	["1973 live in the late 80s", "1973/1973a.jpg", "1973 live in the late 80s"],
	["1973 live in Kline Commons", "1973/1973b.jpg", "1973 live in Kline Commons"],
	["1973 Poster", "1973/1973poster3.jpg", "1973 Poster of 1973"],
	["Show Flyer", "showflyers/1973poster.jpg", "Show Flyer"],
	["Show Flyer", "showflyers/1973poster2.jpg", "Show Flyer"],
];
displayModal($modalData);

$page->close();
?>
