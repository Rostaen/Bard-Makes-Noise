<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('Blood Pony | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Blood Pony</h1>
		<p>
			Formed in 2007 by sophomores Josh Sorell and Senia Hardwick, originally under the name "Yoshitora and the Gay Vampire" (names chosen respectively) the guitar-bass duo composed a few fast and noisy jams, mostly in the key of D minor for some reason. Then they became a trio with the inclusion of film student and guitarist Engrida "Octobot" Mebrahtu. The trio expanded their methods and musical theories and created about a dozen songs or so over a period of months, jamming out at open mic nights and wherever they could get a gig on campus. The acquisition of David "Magical Ram" Senges-Murphy on "vocals" allowed the group to delve into basic death metal and hardcore territory. It was not until the band gained a drummer with Brian "Werewolf Optometrist" Kotkin that the ensemble of ridiculously named individuals became complete.
		</p>
		<p>
			The process of on-stage performance evolved to creating a fictional back story (something about samurais and inter-dimensional portals) and a series of onstage gags; such as forgetting what band they were, planting hecklers in the audience, attempting to become a jazz band by playing random noises and using costumes and gimmicks while playing songs mostly about either food or animals (such as "Beef Grenade" "Mysterious Bovine," "Oatmeal Owl," and the metal tribute "Ya Chachu Zavtrakat" meaning 'I want Breakfast' in Russian.) The band has been known to have themed gigs and to attract audiences with the promise of snacks (Halloween with candy, "pi day" with free pie.) Currently the group is planning on a 3 CD demo as well as an actual gig at The Chance in Poughkeepsie on June 5th.
		</p>
		<p>
			The band has been praised as "completely ridiculous" and "kind of like the Flaming Lips, if the Flaming Lips stopped playing music." The groups members site Electric Six, The Ramones, Tool, Spinal Tap, Iron Maiden, Nirvana, Yo La Tengo and Joe Satriani as heavy influences. <i>[Email from Josh Sorell 2009]</i>
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<section class="pb-3">
			<h2 class="pb-1">Video</h2>
			<div class="pb-3">
				<?php
				$videoData = [
					["Show Jokes", "https://www.youtube.com/embed/7WDqWaGK66s"],
					["Punk Rock from Gorillaz Set", "https://www.youtube.com/embed/nAG1dg_Uu8U"],
				];
				displayVideos($videoData);
				?>
			</div>
		</section>
		<section>
			<h2 class="pb-1">Photos</h2>
			<div id="bigNoiseSlider" class="carousel" data-ride="carousel">

				<!-- Indicators -->
				<ul class="carousel-indicators">
					<?php carouselIndicators(7); ?>
				</ul>

				<!-- The slideshow -->
				<div class="carousel-inner">
					<?php
					$carouselData = [
						["bloodpony/bloodpony1.jpg", "Blood Pony promotional shot"],
						["bloodpony/bloodpony2.jpg", "Blood Pony live"],
						["bloodpony/bloodpony3.jpg", "Blood Pony live @ SMOG"],
						["bloodpony/bloodpony4.jpg", "Blood Pony live @ SMOG"],
						["bloodpony/bloodpony5.jpg", "Blood Pony promotional shot"],
						["bloodypony-poster1.jpg", "Show Flyer"],
						["bloodypony-poster2.jpg", "Show Flyer"],
					];
					?>
				</div>

				<!-- Left and right controls -->
				<?php carouselControls(); ?>

			</div>
		</section>
	</aside>
</div>

<!-- Carousel Images -->
<?php
$modalData = [
	["Blood Pony promotional shot", "bloodpony/bloodpony1.jpg", "Blood Pony promotional shot"],
	["Blood Pony live", "bloodpony/bloodpony2.jpg", "Blood Pony live"],
	["Blood Pony live @ SMOG", "bloodpony/bloodpony3.jpg", "Blood Pony live @ SMOG"],
	["Blood Pony live @ SMOG", "bloodpony/bloodpony4.jpg", "Blood Pony live @ SMOG"],
	["Blood Pony promotional shot", "bloodpony/bloodpony5.jpg", "Blood Pony promotional shot"],
	["Show Flyer", "showflyers/bloodypony-poster1.jpg", "Show Flyer"],
	["Show Flyer", "showflyers/bloodypony-poster2.jpg", "Show Flyer"],
];
displayModal($modalData);
$page->close();
?>
