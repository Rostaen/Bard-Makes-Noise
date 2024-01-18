<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Virus | Bands of Bard | Bard Makes Noise');
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
			<h1>Virus</h1>
			<p>
				From <a href="https://www.bard.edu/bardmakesnoise/pdfs/LightBardRock.pdf">The Light - Bard Rock Issue</a> (1981) written by Charlie Lenk: <span class="fst-italics">Virus was formed by [Art] Carlson and Mike Griffin, with the idea to play rock and roll that would relieve the constipated jazz-oriented musical scene at Bard. There were no other rock bands in existence in April '78, and Art and Mike figured that no matter how bad they played they were bound to get some appreciation. They were right. Their first gig was, technically, a musical disaster: Between the five songs that the band knew and had to play twice to stretch their set out, the fact that the band had only rehearsed three times before performing, the inexpertise of all the musicians involved (besides Art on vocal and sax and Mike on bass, there was Bob Fagen [Fagan] and Art Weinstein on guitars and Barry Bonnerwith on drums), Art's sickness from bad clams, and the band's drunkenness, there were enough reasons why the show should have been unmemorable on all counts. Instead of getting shoved offstage, however, Virus caused the audience to go wild: pogoing, rolling on the floor, and pouring beer on each other, the audience reacted more unreservedly than any had within Art's memory. "In the next week, we had about fifteen people ask to join us," he said. "We told them to go fuck themselves, just as they had when we first proposed starting a rock and roll band. They told us we were stupid to try it, and now they wanted to join. Some of them went off and formed the Twilites."</span>
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="pb-3">
					<h3>Get Naked</h3>
					<p>Live at Bard 1977</p>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1PgEHJl9aW3q5_t1DTYzAd-hFPRVgL51p/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<div class="pb-3">
					<h3>Cynic in Love</h3>
					<p>Live at Bard 1977</p>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1Xh89fwkpzXuSUsut1sXJkwjGB3FvnK_M/preview?usp=sharing">
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
							<img src="https://www.bard.edu/bardmakesnoise/images/virus/virus.jpg" alt="Virus promotional still" data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/virus/virusreunion1.jpg" alt="Virus reunion show 1999" data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/virus/virusreunion2.jpg" alt="Virus reunion show 1999" data-toggle="modal" data-target="#lsImg4">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/virus-reunion.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg5">
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
					<h4 class="modal-title">Virus promotional still</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/virus/virus.jpg" alt="Virus promotional still" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Virus reunion show 1999</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/virus/virusreunion1.jpg" alt="Virus reunion show 1999" data-toggle="modal" data-target="#lsImg3">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Virus reunion show 1999</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/virus/virusreunion2.jpg" alt="Virus reunion show 1999" data-toggle="modal" data-target="#lsImg4">
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
					<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/virus-reunion.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg5">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>