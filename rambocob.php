<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Rambo Cob | Bands of Bard | Bard Makes Noise');
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
			<h1>Rambo Cob &amp; the Sheetrockers</h1>
			<p>
				Rambo Cob and the Sheetrockers’ came into being sometime in 1985, an official “post-Bard band.” Members included Art Carlson, Bruce Huber, Lee Perry, and Steve Reid. According to Art, Mark Kirby may have been the original drummer, but he was replaced by Steve Reid pretty quickly. Most of the band members were in construction at the time, and the band’s name referred to jobs that emphasized speed over care; thus, when they had to ‘rambo’ through a project, it became a ‘cob job.’ Could the Sheetrockers be far behind?
			</p>
			<p>
				The Hotel Rhinecliff was their favorite venue, though they also played at Sottery, Manor, Kline and “some place in the city”. Costumes included whatever available clothing happened to have the most paint. Rambo Cob lasted until 1987, and then morphed into ‘Men of Religion,’ a city based band that included Art, Brian O’Sullivan, Mark Kirby, David Casey, Marc Dale, Bruce Huber, and Lee Perry. <span class="fst-italic">[Paraphrased from phone interview with Art Carlson]</span>
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="pb-3">
					<h3>Bit by the Rabid Vengeance of a Woman Gone Wild</h3>
					<p>Live @ The Rhinecliff Hotel - Febraury 21, 1987</p>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/13E3T79_hH4TAdiV1vZLdBC4m4a6dZzZy/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<div class="pb-3">
					<h3>Louie Seize</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1ftGLDfAMSxVia8TvC_x23ggPIuWMqiOg/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<div class="pb-3">
					<h3>Softly I Remember Laura</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1no0mXChNCgx-XubjahBJPF7ksAlkIYnZ/preview?usp=sharing">
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
						<li data-target="#bigNoiseSlider" data-slide-to="4"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="5"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://www.bard.edu/bardmakesnoise/images/rambocob/Rambo1.jpg" alt="Rambo Cob & the Sheetrockers live" data-toggle="modal" data-target="#lsImg1">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/rambocob/rambocob2.jpg" alt="Rambo Cob & the Sheetrockers live" data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/rambocob/Rambo3.jpg" alt="Rambo Cob & the Sheetrockers live" data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/rambocob/Rambo4.jpg" alt="Rambo Cob & the Sheetrockers live" data-toggle="modal" data-target="#lsImg4">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/rambocob2.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg5">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/rambocob1.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg6">
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

	<div class="modal" id="lsImg1">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Rambo Cob & the Sheetrockers live</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/rambocob/Rambo1.jpg" class="img-fluid" alt="Rambo Cob & the Sheetrockers live" data-toggle="modal" data-target="#lsImg1">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg2">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Rambo Cob & the Sheetrockers live</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/rambocob/rambocob2.jpg" alt="Rambo Cob & the Sheetrockers live" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Rambo Cob & the Sheetrockers live</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/rambocob/Rambo3.jpg" alt="Rambo Cob & the Sheetrockers live" data-toggle="modal" data-target="#lsImg3">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Rambo Cob & the Sheetrockers live</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/rambocob/Rambo4.jpg" alt="Rambo Cob & the Sheetrockers live" data-toggle="modal" data-target="#lsImg4">
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
					<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/rambocob2.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg5">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg6">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Show Flyer</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/rambocob1.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg6">
				</div>
			</div>
		</div>
	</div>
<?php
	$page->close();
?>