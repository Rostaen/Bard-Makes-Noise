<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Blood Pony | Bands of Bard | Bard Makes Noise');
	$page->setMetaKW('');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>
<style>
	/* Make the image fully responsive */
	.carousel-inner img {
		width: 100%;
		height: 100%;
	}
</style>
	<div class="row lt-gray">
		<div class="col-lg-8">
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
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Video</h2>
				<div class="pb-3">
					<h3>Show Jokes</h3>
					<div class="youtube-vid-container">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/7WDqWaGK66s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<h3 class="pt-3">Punk Rock from Gorillaz Set</h3>
					<div class="youtube-vid-container">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/nAG1dg_Uu8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div>
				<h2 class="pb-1">Photos</h2>
				<div id="bigNoiseSlider" class="carousel" data-ride="carousel">

					<!-- Indicators -->
					<ul class="carousel-indicators">
						<li data-target="#bigNoiseSlider" data-slide-to="0" class="active"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="1"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="2"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="3"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="4"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="5"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="6"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://www.bard.edu/bardmakesnoise/images/bloodpony/bloodpony1.jpg" alt="Blood Pony promotional shot" data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bloodpony/bloodpony2.jpg" alt="Blood Pony live" data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bloodpony/bloodpony3.jpg" alt="Blood Pony live @ SMOG" data-toggle="modal" data-target="#lsImg4">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bloodpony/bloodpony4.jpg" alt="Blood Pony live @ SMOG" data-toggle="modal" data-target="#lsImg5">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bloodpony/bloodpony5.jpg" alt="Blood Pony promotional shot" data-toggle="modal" data-target="#lsImg6">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/bloodypony-poster1.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg7">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/bloodypony-poster2.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg8">
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#bigNoiseSlider" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#bigNoiseSlider" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>

				</div>
			</div>
		</div>
	</div>

	<!-- Carousel Images -->
	<div class="modal" id="lsImg2">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Blood Pony promotional shot</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bloodpony/bloodpony1.jpg" alt="Blood Pony promotional shot" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Blood Pony live</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bloodpony/bloodpony2.jpg" alt="Blood Pony live" data-toggle="modal" data-target="#lsImg3">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Blood Pony live @ SMOG</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bloodpony/bloodpony3.jpg" alt="Blood Pony live @ SMOG" data-toggle="modal" data-target="#lsImg4">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg5">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Blood Pony live @ SMOG</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bloodpony/bloodpony4.jpg" alt="Blood Pony live @ SMOG" data-toggle="modal" data-target="#lsImg5">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg6">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Blood Pony promotional shot</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bloodpony/bloodpony5.jpg" alt="Blood Pony promotional shot" data-toggle="modal" data-target="#lsImg6">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg7">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Show Flyer</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/bloodypony-poster1.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg7">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg8">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Show Flyer</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/bloodypony-poster2.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg8">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>