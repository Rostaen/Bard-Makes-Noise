<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/mrsWhiteheadData.php");
$page = new Template();
$page->setTitle('Mrs. Whitehead | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Mrs. Whitehead</h1>
		<p>
			According to Tom Pandaleon: <span class="fst-italic">"When I was a Freshman in 1981 I had the good fortune to be housed on the third floor of Tewksbury, the upper floors of which had been chosen by a group of friends as their space for their Sophomore year. One of that group was Chris Long, who often wandered the hallways playing an electric guitar equipped with a tiny, tinny, “Tweety Bird”, battery powered amplifier that plugged directly into the guitar. Whether he had all 6 strings (which was rare) or only 3, Chris had a unique sound. The beginning of the 2nd Semester that year I ran into Chris and Pete Brancazio at the first meeting of ‘Ensembles Class’ at Bard Hall, and we decided to build a band around Chris’ sound. Pete would sing, I would play a Kazoo (miked through a wah-wah pedal) and Chris would do his thing through a full sized amp. We soon added Phil Lauderbach on bass, Steve Reid on drums, Martha Atwell on guitar, Mike Hoffman on violin and Buford O’Sullivan on trombone. We first jammed at The Great Hall of Preston, and the podium there quickly became a percussion instrument for me. Buford also started playing upside down garbage cans while we played there, and we both started playing percussion for most of the set we were building.</span>
		</p>
		<p>
			<span class="fst-italic">The real 'Mrs Whitehead' was a librarian in Tuxedo NY, who had sent Heidi Lewis a stern letter about an unreturned book. Somehow, somewhere, we decided to name the band after her. One night the group’s extended family had a 'Weenie Roast' in the kitchen in Sands House, and together we wrote a huge chunk of our lyrics, including 'I Ain’t No Lightweight' and others.</span>
		</p>
		<p>
			<span class="fst-italic">At one point Steve decided to leave the group. We knew Kirby liked us, and would be perfect to replace him, but would he join us for keeps??!!? He agreed, and fit in seamlessly. With Pete on Vocals and this Polyrhythmic Buzzing Sound behind him, sort of a Punk/Avant Garde/Tribal Music that was unique unto Mrs Whitehead, we played lots and lots of parties and dances on Campus, in NYC, at Maxwell’s in Hoboken etc..."</span>
		</p>
		<p>
			<span class="fst-italic">Mark Kirby adds: "It was 1983 and I was very depressed. I wasn't making much music since the Trolls had more or less vanished, and there wasn't much jazz or jamming for some reason that spring at the Troll House. I was beginning to think that rock was dead! Then I heard the Minutemen on this audio cassette magazine. That was awesome. Then I heard that the <a href="beastieboys.php">Beastie Boys</a> were playing at Aldo's. I went to that. The opening band was some band called Mrs. Whitehead. The only person I knew was Bryan O'Sullivan, of Big Noise fame, who was playing garbage cans. The big metal kind. The rest of the band I thought - 'What a bunch of geeks.' They had semi-clean cut looks and short hair and seemed kinda awkward. And this girl on guitar looked like a librarian. When they played, the percussive onslaught was intense. The guitars were dissonant and fuzzy. That library girl was lookin' cuter by the minute. The bass lines were fat in that post-punk PIL / Pop Group / The Fall kind of way. And the singer, this skinny pencil neck, was pretty spastic and crazy. And he had great words in the songs: 'If the girls laugh at you' and 'I realize what a thrill it must be to be in the same room as me.' It was absurdist, crazed punk at its best! It renewed my feeling of rock and roll, that life-giving, cathartic, madhouse fun feeling that chases the blues away. At that point I realized that life was worth living."</span>
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
