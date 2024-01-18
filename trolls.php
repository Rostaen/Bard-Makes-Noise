<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('The Trolls | Bands of Bard | Bard Makes Noise');
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
			<h1>The Trolls</h1>
			<img src="https://www.bard.edu/bardmakesnoise/images/trolls/Trolls.jpg" class="float-end ps-3 pb-3" alt="The Trolls standing in front of brick wall" data-toggle="modal" data-target="#lsImg1">
			<p>
				The Trolls were Art Carlson on vocals, sax and trumpet; Mark Kirby on vocals and percussion; Marc Dale on bass; and Chris Cochrane on guitar - later Bruce A. Huber. According to Mark Kirby: "The Trolls were born in 1973 in the basement of Art's parents house, where we smoked weed, listened to Sun Ra, Eric Dolphy, Miles Davis, Jimi Hendrix, Frank Zappa and the Mothers of Invention, Captain Beefheart, and Stockhausen among others. We forged all this into music of sorts. Over time, during breaks from college and summers home, we kept playing in Art's house, sometimes Marc Dale's mom's house, keeping the dream of us high school buddies forming a band alive. The dream came alive in the Troll House on Broadway in Tivoli, where we jammed, smoked, I sold mushrooms, and Art cooked. Sometimes we even had jobs, especially Marc Dale. The Stooges' 'Fun House' became a major influence. Our songs were often made up on the spot, like during live shows. Or with a vague idea. Mostly we relied on Marc Dale's bass lines as an anchor and away we went." Read more about the Trolls in <a href="https://www.bard.edu/bardmakesnoise/pdfs/LightBardRock.pdf">The Light - Bard Rock Issue</a> (1981) and in <a href="https://www.bard.edu/bardmakesnoise/pdfs/Trolls.pdf">The Light-Observer</a> (March 1982).
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="pb-3">
					<h3>Jamaican Love Story</h3>
					<p>female voices by the Trollops: Nancy Chase &amp; Niki Lambros</p>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1GW47mwoaopoobwl-zXcg5bE0d5eHpZ0L/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
			</div>
			<div class="pb-4">
				<h2 class="pb-1">Photos</h2>
				<div id="bigNoiseSlider" class="carousel" data-ride="carousel">

					<!-- Indicators -->
					<ul class="carousel-indicators">
						<li data-target="#bigNoiseSlider" data-slide-to="0" class="active"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="1"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="2"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="3"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://www.bard.edu/bardmakesnoise/images/trolls/TrollsHouse83.jpg" alt="The Trolls in Tivoli" data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/trolls/trolls-7inch.jpg" alt='The Trolls "Jamaican Love Story"' data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/trolls/Trolls-Carlson.jpg" alt="Art Carlson of the Trolls" data-toggle="modal" data-target="#lsImg4">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/trolls-aldos.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg5">
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

	<!-- Flyer -->
	<div class="modal" id="lsImg1">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">The Trolls</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/trolls/Trolls.jpg" class="img-fluid" alt="The Trolls standing in front of brick wall" data-toggle="modal" data-target="#lsImg1">
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
					<h4 class="modal-title">The Trolls in Tivoli</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/trolls/TrollsHouse83.jpg" alt="The Trolls in Tivoli" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">The Trolls "Jamaican Love Story"</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/trolls/trolls-7inch.jpg" alt='The Trolls "Jamaican Love Story"' data-toggle="modal" data-target="#lsImg3">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Art Carlson of the Trolls</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/trolls/Trolls-Carlson.jpg" alt="Art Carlson of the Trolls" data-toggle="modal" data-target="#lsImg4">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg5">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Show Flyer</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/trolls-aldos.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg5">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>