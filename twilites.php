<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('The Twilites | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>The Twilites</h1>
		<p>
			George Hirose, Bard Class of '79, writes: "When I joined the Twilites in Spring of '78, Bard had something like 800 students. Punk had taken over the youth culture of our times and was being imported up to Annandale in bits and pieces. Richard Hell and the Voidoids had already played at the Spring Formal in '77 on the lawn behind Blithewood manor (a very surreal juxtaposition). The Dead Boys, the Heartbreakers, Talking Heads, and the B-52's began to dominate the Bard musical landscape. Feeling like we might be missing out on something, we would periodically carpool down to CBGB's and the Lower East Side to slum it. It was inevitable that Bardians would have to form their own scene so that they could pogo in Annandale. <a href="virus.php">Virus</a> (formed by Art Carlson in Fall of '77) was Bards first punk band and inspired the formation of the Twilites and the X-Twilites.
		</p>
		<p>
			The Twilites were started by Billy Swindler on vocals and keyboards and Jerry Kelsall on vocals and guitar. Billy and Jerry were the Odd Couple. Thinking back it was sort of a punk fusion band, a sometimes schizophrenic art project meshing music major Billy's theatrical singing and playing abilities with Jerry's pure guitar punk drive and looks. One good example was our combining Dancing in the Streets with Street Fighting Man. Billy would sing the Motown parts and the song would alternate back and forth with Jerry's classic punk vocals on Street Fighting Man. We also played a very primitive version of the Patty Duke Show theme, a song which we had all grown up on. Except for those tunes and some required Stooges covers, Billy and Jerry wrote all the songs. I really liked being in the band because I got to play a lot of lead guitar especially on some of Billy's more exploratory compositions...space jams which contrasted sharply with Jerry's two and a half minute punk pop tunes. We also had a very good bass player named Bill on bass, the quiet man in the band...and Red Hook High School student Barry on drums. We had some great times, and then we all went home for summer vacation and this phase of the band more or less dissolved.
		</p>
		<p>
			The original X-Twilites were formed around the same time as the Twilites with Begos on vocals, supreme poser Lee Self on guitar, and Stephen Fitz-Stephens on bass. I believe that they were not actually an off shoot band and that the name confusion was due to some sort of unfortunate debate as to who actually had the rights to the name Twilites. Eventually, Jerry and vocalist Kevin Begos from the X-Twilites joined together to reform the Twilites and follow a straighter path towards punk rock oblivion. This version of the Twilites took itself much less seriously. On stage lead vocalist Begos would wear a straight jacket and would struggle to get free throughout each set. It was very entertaining... if his mic fell over he would have to lie on the floor to sing into it.
		</p>
		<p>
			In the beginning, the Twilites and the X-Twilites would sometimes all play on the same bill along with the infamous Virus. These gigs were promoted as a Battle of the Bands which helped create a friendly and often humorous rivalry. This was somewhat instigated by Virus leader Art Carlson who seemed to revel in it. I heard that Art claims that we all wanted to be in Virus, but that he turned us down. I think that he was just pissed because he wasn't good enough to play with us." <span class="fst-italics">[Email 12/15/2008]</span>
		</p>
		<p>
			Read more about the Twilites, X-Twilites and other Bard bands in <a href="https://www.bard.edu/bardmakesnoise/pdfs/LightBardRock.pdf">The Light – Bard Rock Issue</a> (1981).
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["twilites/Twilites1.jpg", "The Twilites playing outside Blithewood"],
			["twilites/Twilites2.jpg", "The Twilites live at Blithewood"],
			["twilites/Twilites3.jpg", "The Twilites live"],
			["twilites/twiliteskline.jpg", "The Twilites playing in Kline"],
			["twilites/twilitesparty4.jpg", "The Twilites Live"],
			["twilites/twilitesparty3.jpg", "The Twilites Live"],
			["twilites/twilitesparty2.jpg", "The Twilites Live"],
			["twilites/twilitesparty1.jpg", "The Twilites Live"],
			["showflyers/twilitesposter.jpg", "Show Flyer"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>

<?php
// Displaying Modal Section
$modalData = [
	["The Twilites playing outside Blithewood", "twilites/Twilites1.jpg", "The Twilites playing outside Blithewood"],
	["The Twilites live at Blithewood", "twilites/Twilites2.jpg", "The Twilites live at Blithewood"],
	["The Twilites live", "twilites/Twilites3.jpg", "The Twilites live"],
	["The Twilites playing in Kline", "twilites/twiliteskline.jpg", "The Twilites playing in Kline"],
	["The Twilites Live", "twilites/twilitesparty4.jpg", "The Twilites Live"],
	["The Twilites Live", "twilites/twilitesparty3.jpg", "The Twilites Live"],
	["The Twilites Live", "twilites/twilitesparty2.jpg", "The Twilites Live"],
	["The Twilites Live", "twilites/twilitesparty1.jpg", "The Twilites Live"],
	["Show Flyer", "showflyers/twilitesposter.jpg", "Show Flyer"],
];
displayModal($modalData);

$page->close();
?>
