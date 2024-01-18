<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Stan Halen | Bands of Bard | Bard Makes Noise');
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
			<h1>Stan Halen</h1>
			<p>
				The Stan Halen Story: The Band, Mrs. Whitehead, was more than just a band; it was also an extended family. We hung out together, played together, and ate together at Kline. One day Chris Long was making a joke that Whitehead would be so big that Van Halen would soon be opening for us. This shifted into a series of jokes. Somewhere in there, I said it would be Stan Halen, not Van Halen. Stan Halen then took on the personality of a guy down the hall in Tewks, who played all the latest songs on his guitar, but all sounded the same. Further plays on this theme morphed into Stan Halen, playing the Hits, done country style, since 1908. At that point it was decided that this fictional band should be turned into the real thing... as a "spin off" of Whitehead.
			</p>
			<p>
				Soon Pat Hurley (Guitar/Vocals/Harmonica) Mike Hoffman (Violin/Vocals) and myself <span class="fst-italic">[Tom Pandaleon]</span> (Guitar/Vocals) started rehearsing  songs by the Ramones, Sex Pistols, Talking Heads etc. with an Acoustic/Country feel. I even turned 'The Message', by Grand Master Flash (Rap was just starting at that point) into a country song. People loved the concept, probably more than the music, and after about a year together we were asked by Adam Yauch to open for the <a href="beastieboys.php">Beastie Boys</a> at Aldo's. They hadn't hit it big yet, but had a strong following, and we were happy to play before their set.
			</p>
			<p>
				The night of the show everything was going well until our final number, 'Oliver's Army', by Elvis Costello. Towards the end of the song the PA shorted out, but, rather than stop, we kept playing, with two Acoustic Guitars, an Amped Violin, and everybody in the room singing  the cynical refrain "I would rather be anywhere else, than here today", for about 5 minutes. We finally finished the song, but the PA was dead, and The Beasties had to do their set without a sound system. <span class="fst-italic">[From Tom Pandaleon 2009]</span>
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="pb-3">
					<h3>Message</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1svTxR68Ce5mzY9UT7_TcBhge5IjihkyF/preview?usp=sharing">
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
							<img src="https://www.bard.edu/bardmakesnoise/images/stanhalen/stanhalen1.jpg" alt="Stan Halen" data-toggle="modal" data-target="#lsImg1">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/stanhalen/stanhalen2.jpg" alt="Stan Halen" data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/stanhalen/stanhalen3.jpg" alt="Stan Halen" data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/stanhalen/stanhalen4.jpg" alt="Stan Halen" data-toggle="modal" data-target="#lsImg4">
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
					<h4 class="modal-title">Stan Halen</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/stanhalen/stanhalen1.jpg" class="img-fluid" alt="Stan Halen">
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
					<h4 class="modal-title">Stan Halen</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/stanhalen/stanhalen2.jpg" alt="Stan Halen" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Stan Halen</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/stanhalen/stanhalen3.jpg" alt="Stan Halen">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Stan Halen</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/stanhalen/stanhalen4.jpg" alt="Stan Halen">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>