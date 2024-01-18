<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Guppy Boy Grunt | Bands of Bard | Bard Makes Noise');
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
			<h1>Guppy Boy Grunt</h1>
			<p>
				Guppy Boy Grunt featured David Baeumler on vocals, Jason Gusmann on drums and vocals, Ian Lamont-Havers on bass, and Chris (rupe) O'Neil on guitar. Chris O'Neil says:
			</p>
			<p>
				"I remember that we made a real effort to keep it simple. That first year, 1990 I met Dave Baeumler in a video class and Dave and Jason Gusmann knew each other growing up in Buffalo, NY. We were all film majors. I remember they more or less insisted on songs with all major chords, keep it melodic and accessible.
			</p>
			<p>
				Initially, GBG had a minimalist style, with Jason Gusmann playing only a snare and a floor tom for drums, (standing and singing.) And then me with an '86 Korean Strat thru a GK 250ML lunchbox with one twin 12 cab. I tried to fill as much space as I could. This put Dave B front center with just a lone mic for cover, (those Tewksbury parties could get dicey...) So, he would always be leaping around throwing things, crushing something or dodging thrown objects, generally making a spectacle of himself. His performances were hypnotizing. So dedicated. Highly athletic and entertaining.
			</p>
			<p>
				Later in 1991, Ian Lamont-Havers joined us on bass and that really crystallized everything. Ian's bass lines would drive the songs forward, with the guitar then able to be more versatile, (i.e. being quiet during the verses and then loud in the choruses, as opposed to before when the guitar was always loud.) Call it dynamics. The vocals and songwriting were really strength of the band and the focus. Dave and Jason writing the lyrics and singing. Both of them wrote these incredible layered lyrics and worked out 2-part harmonies. We managed to record most everything with a 4 track cassette recorder before the end, and I think the songs still hold up." <span class="fst-italic">[Email 2009]</span>
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="mb-3">
					<h3>All Fall Down</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1lGL9OL9WsbcCbWA-FKbhJ-slraVa6p5a/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<div class="mb-3">
					<h3>Captain of the Day</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1j-WBkMOKl7VdIWz1Sp-A0fao6dKKrhdF/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<div>
					<h3>Hitch Hiker</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1BBiW3PRCAJEnxMZYDv9UBoNHnnx8v5qT/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
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
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://www.bard.edu/bardmakesnoise/images/gbg/GBG1.jpg" alt="Guppy Boy Grunt live on campus" data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/gbg/GBG2.jpg" alt="Guppy Boy Grunt live on campus" data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/gbg/GBG3.jpg" alt="Guppy Boy Grunt live on campus" data-toggle="modal" data-target="#lsImg4">
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
					<h4 class="modal-title">Guppy Boy Grunt live on campus</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/gbg/GBG1.jpg" alt="Guppy Boy Grunt live on campus" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Guppy Boy Grunt live on campus</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/gbg/GBG2.jpg" alt="Guppy Boy Grunt live on campus">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Guppy Boy Grunt live on campus</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/gbg/GBG3.jpg" alt="Guppy Boy Grunt live on campus">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>