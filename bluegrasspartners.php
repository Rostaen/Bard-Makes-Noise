<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('Bluegrass Partners | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Bluegrass Partners</h1>
		<h2>A.K.A. The New Union String Band</h2>
		<p>
			According to Brian Nielsen (email 2009): <span class="fst-italic">"Not a rock band, but a bluegrass band. We formed immediately within the first week school started, as by chance we all were in Albee hall (how that happened I have no idea). Members were: myself (mandolin), Chris Guest (guitar), Phil Terry (fiddle), and John Kornhauser (dobro). John was a sophomore and he and I were in the same suite (he had one of the 'side rooms' in the suite arrangement, I had what might be called the common room). Chris, who of course went on to bigger things, and Phil were both freshmen like myself. The band lived that whole academic year, but then Chris transferred to NYU. Phil and I were still doing some things after that, and I don't remember what happened with John.</span>
		</p>
		<p>
			<span class="fst-italic">We played the Red Balloon and at least one show in the gym and at least one show on the lawn between Albee and Wardens. Somebody got the Lilly Brothers to come do a show that year, and we played both as an 'opening act' for them and with them directly. We played the Bitter End in the city once (audition night) and were offered a regular gig there, but not something we could do. The big event was the 'Northeastern States Folk Festival,' held annually at Hamilton College, to which we drove in two cars in early 1967. It was perhaps the fifth year it had run, though I really don't remember, attracting acts from several schools, mostly New York state. Anyway, a pretty big deal, we thought. We won first place.</span>
		</p>
		<p>
			<span class="fst-italic">With Chris' connections in New York we got an audition in Spring 1967 with Paul Stookey (of Peter, Paul & Mary) to possibly be an opening act for them, but no go.</span>
		</p>
		<p>
			<span class="fst-italic">We played a fair amount around campus that one year. I recall that Robert Coover enjoyed our stuff, something I was especially pleased about after having read The Universal Baseball Association, in which bluegrass figured. There was a controversy because we had a song, 'Purple Heart,' in our repertoire, and someone thought it was somehow disrespectful of the seriousness of the Vietnam war, but we didn't think it was and didn't stop doing it. (It was a great song: 'They sent him to Viet Nam / His heart was young and gay / It's hard for me to realize / They'd bring him home this way. // Another heart is broken / Another journey's done / His mother has a purple heart / In memory of her son.'"</span>
		</p>
	</section>
	<aside class="col-lg-4">
		<?php
		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["bluegrasspartners/observer3-21-67.jpg", "Bard Observer article on Bluegrass Partners"],
			["bluegrasspartners/bluegrass partners chip.jpg", "CHG [Christopher Haden-Guest] and the Bluegrass Partners (Photo courtesy of Brian Nielsen)"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>

<?php
// Displaying Modal Section
$modalData = [
	["Skip Strong's Steamboat Six", "bluegrasspartners/observer3-21-67.jpg", "Bard Observer article on Bluegrass Partners"],
	["CHG [Christopher Haden-Guest] and the Bluegrass Partners (Photo courtesy of Brian Nielsen)", "bluegrasspartners/bluegrass partners chip.jpg", "CHG [Christopher Haden-Guest] and the Bluegrass Partners (Photo courtesy of Brian Nielsen)"],
];
displayModal($modalData);
$page->close();
?>
