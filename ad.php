<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('AD | Bands of Bard | Bard Makes Noise');
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
			<h1>AD</h1>
			<p>
				Anthony DeMore was the founder and lead vocalist of the hip-hop, metal band "AD". With lyrics driven by socio-politically and environmentally charged themes, the band found a new level of heaviness when David Tarica was added in 1989. With Tarica's monster guitar riffs and DeMore's potent raps, the band quickly became a Bard favorite. After graduation, the AD lineup changed and they moved to New York City securing a record deal with Rage Records. They toured all over Europe and recorded two CD’s before splitting up in the late 90s.
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="pb-3">
					<h3>Deadzone</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1aVemhBFle6r5ktlZ2OEppJ7QFcqCl_-d/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<div class="pb-3">
					<h3>Threat With Intellect</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/12lH9zziFE37iWL4_8Vcx5A2ltOoVA-z9/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<div class="pb-3">
					<h3>Whole House Panicked</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/13P_BrgI4YEOvVz5PhgLmA_Bx7aOzoO4o/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
			</div>
			<div class="pb-4">
				<h2 class="pb-1">Photos</h2>
				<div id="bigNoiseSlider">

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://www.bard.edu/bardmakesnoise/images/band-a-d-images/adcover.jpg" alt="AD Album Cover" data-toggle="modal" data-target="#lsImg2">
						</div>
					</div>

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
					<h4 class="modal-title">AD Album Cover</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/band-a-d-images/adcover.jpg" alt="AD Album Cover" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>