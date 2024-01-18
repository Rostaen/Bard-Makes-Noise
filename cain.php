<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('C.A.I.N. | Bands of Bard | Bard Makes Noise');
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
			<h1>Christ Aborted in Nativity (C.A.I.N.)</h1>
			<p>
				Christ Aborted In Nativity was formed in September 2000 by vocalist Quinton Gardner and guitarist Nate Satkewich. Their vision for C.A.I.N. was remarkably simple: to form a death and black metal crossover band that maintained clarity and definition no matter how heavy or complex the individual parts became. As Nate describes, "The mask of CAIN was not to be lightly worn...I wrote these songs to express the dismal emptiness inside. The hurt and the pain we feel when terror consumes our daily life; a once proud people of beliefs and ideals mercilessly beaten into the ground. Quinton's lyrics were simply the only words to put to this music. His bleak and apocalyptic visions as a poet, deeply moving voice and his devotion to the cause made CAIN what we were. We were fanatical in our higher mission to create art." Other band members included original drummer Dan Brunnemer and his replacement Tucker Dalton as well as keyboard player Tommy Soden. <em>[Excerpted from C.A.I.N.'s <a href="http://www.665.org/cain/">website</a> and emails from Nate Satkewich] </em>
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="pb-3">
					<h3>Anarchy Enthroned</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1-QQ4Pun20Txu1CRLYTKH-FLlPSXxZ4Nb/preview?usp=sharing">
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
						<li data-target="#bigNoiseSlider" data-slide-to="3"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="4"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="5"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://www.bard.edu/bardmakesnoise/images/CAIN/nate.jpg" alt="Nate Satkewich from C.A.I.N." data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/CAIN/quinton.jpg" alt="Quinton Gardner from C.A.I.N." data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/CAIN/adam.jpg" alt="Adam from C.A.I.N." data-toggle="modal" data-target="#lsImg4">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/CAIN/jon.jpg" alt="Bass player from C.A.I.N." data-toggle="modal" data-target="#lsImg5">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/CAIN/christoph.jpg" alt="Dan Brunnemer from C.A.I.N." data-toggle="modal" data-target="#lsImg6">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/cain-ox-pr-ainf.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg7">
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
					<h4 class="modal-title">Nate Satkewich from C.A.I.N.</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/CAIN/nate.jpg" alt="Nate Satkewich from C.A.I.N." data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Quinton Gardner from C.A.I.N.</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/CAIN/quinton.jpg" alt="Quinton Gardner from C.A.I.N." data-toggle="modal" data-target="#lsImg3">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Adam from C.A.I.N.</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/CAIN/adam.jpg" alt="Adam from C.A.I.N." data-toggle="modal" data-target="#lsImg4">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg5">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Bass player from C.A.I.N.</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/CAIN/jon.jpg" alt="Bass player from C.A.I.N." data-toggle="modal" data-target="#lsImg5">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg6">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Dan Brunnemer from C.A.I.N.</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/CAIN/christoph.jpg" alt="Dan Brunnemer from C.A.I.N." data-toggle="modal" data-target="#lsImg6">
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
					<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/cain-ox-pr-ainf.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg7">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>