<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/suzyJaguarData.php");
$page = new Template();
$page->setTitle('Suzy Jaguar &amp; the Mechanics | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Suzy Jaguar &amp; the Mechanics</h1>
		<p>
			According to Suzy Barocas Perler: "The band started in '81...a few weeks after I just arrived. Charlie Lenk, our drummer, saw I had an electric guitar and a much needed car and immediately introduced me to Michael O'Brien, our brilliant lead guitarist. He was my guitar hero. Michael wrote most of the songs but I got to write one of our more popular songs 'Boyfriend Material.' That was fun to sing...I mean scream out. A little R rated so definitely not a song to share with my kids around the campfire. I'm never good with categorizing music so I'd say our music was a combo of new wave, punk, rock. Innovative, to say the least. I have dim memories of us in our black leather jackets practicing in a dark barn-like room and Abdi, our bass player, constantly singing out 'oy, oy, oy' whenever he could. We played at school and around town-mostly at The Whaleback. We didn't get paid much but always got free drinks. I loved being the only female. These guys were so unbelievably cool. They graduated before me so I sure missed my boys when they were gone!" Quoted from email 2008]
		</p>
		<p>
			Suzy, a mom and artist, stills plays that same Fender Strat in a successful New Jersey all female rock band, The Mood Swings.
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
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
