<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/ssfbData.php");
$page = new Template();
$page->setTitle('Soothing Sounds for Baby | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Soothing Sounds for Baby</h1>
		<p>
			Featured Antony Flackett, Matt Kaden and Allan Heifetz all performing on guitar, bass, drums and vocals. Friends since elementary school and together as a band from 1985 to 1998, <!-- <a href="http://babel.massart.edu/~flackett/sounds.html"> -->Soothing Sounds for Baby<!-- </a> --> grew up listening to the Beatles but then got into experimental punk ala Talking Heads, Devo, early XTC and eventually the Minutemen. Captain Beefheart joined the equation somewhere along the way and also the musical innovator Raymond Scott (who was the inspiration for their name). According to Antony Flackett: "We had been together since high-school but our most creative time was definitely the two years that we were all at Bard together between 1990 and 1991. We had our own rehearsal space under the Tewksbury dorm and could rehearse whenever we wanted - which was all the time. We played a lot of great house parties and also got to open up for some of our favorite bands that performed on campus including another unsung art punk band Poughkeepsie's Agitpop who we befriended. The Bard community was very open minded and really embraced our more experimental side so it was a very inspiring environment to be in....good times." <em>[Email 2009]</em>
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying video section
		displayVideos($videoData);

		// Displaying music section
		displayMusic($musicData);
		?>
		</section>
	</aside>
</div>

<?php
$page->close();
?>
