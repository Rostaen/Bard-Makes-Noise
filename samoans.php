<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('The Samoans | Bands of Bard | Bard Makes Noise');
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
			<h1>The Samoans (Samoanz)</h1>
			<p>
				According to Art Carlson, the Samoans' name was inspired by a WWF tag team managed by Captain Lou Albano. At some point, the name morphed into the Samoanz. All of the band members were big wrestling fans, who loved its "silly, over the top" quality. The music was "sort of jokey, punk rock," and their most popular song was "Fucking Homos," an ironic song written by Chris Cochrane. Nayland Blake wrote a prescient song that included lyrics to the effect of: "I'm gonna put a hole in the Ayatollah; I'll see you in Pakistan..." The Samoans lasted for about a year. <span class="fst-italic">[phone interview 2009]</span>
			</p>
			<p>
				Doug Henderson remembers: "...the original Samoans lineup was myself, Art Carlson, Chris Cochrane, Jimmy Rodewald, Glen [Carter]. Then Mark Kirby turned up from San Francisco about 3 hours before the spring fling at Blithewood and subbed for Glen who had moved on. Art shifted to the Trolls, Nayland took over singing, Guy Yarden joined on Farfisa keyboard and Marc Dale took over on bass. I remember Marc being hassled...he was confused with Kirby (who did not attend Bard and was discouraged from enjoying the life of the campus) and they didn't want us doing our somewhat unauthorized night rehearsals in the chapel. There was some guy named Mark Green who played drums at some point...there was also a lot of rather pure LSD coming from the West coast...Somewhere in there the Lung Rugs materialized as a kind of demented surf band. I know Chris and Nayland were in that one (was I???). Also in the last year, 82, Chris and I formed a power trio with Stu Woods called, possibly, Resistance. After graduating I was still living in Upper Red Hook working on a farm and formed the Future Forefathers with Guy Yarden on violin and my brother David on saxophone." <span class="fst-italic">[Email 2009]</span>
			</p>
			<p>
				<a href="https://www.bard.edu/bardmakesnoise/pdfs/samoanz.pdf">Read more about the Samoanz from Charlie Lenk</a>
			</p>
		</div>
		<div class="col-lg-4">
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
							<img src="https://www.bard.edu/bardmakesnoise/images/samoans/samoans1.jpg" alt="The Samoans" data-toggle="modal" data-target="#lsImg1">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/samoans/samoans2.jpg" alt="The Samoans" data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/samoans/samoans3.jpg" alt="The Samoans" data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/samoans/samoans4.jpg" alt="The Samoans" data-toggle="modal" data-target="#lsImg4">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/samoans/Samoans5.jpg" alt="The Samoans" data-toggle="modal" data-target="#lsImg5">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/samoans-poster.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg6">
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
					<h4 class="modal-title">The Samoans</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/samoans/samoans1.jpg" class="img-fluid" alt="The Samoans">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg2">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">The Samoans</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/samoans/samoans2.jpg" alt="The Samoans" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">The Samoans</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/samoans/samoans3.jpg" alt="The Samoans" data-toggle="modal" data-target="#lsImg3">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">The Samoans</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/samoans/samoans4.jpg" alt="The Samoans" data-toggle="modal" data-target="#lsImg4">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg5">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">The Samoans</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/samoans/Samoans5.jpg" alt="The Samoans" data-toggle="modal" data-target="#lsImg5">
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
					<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/samoans-poster.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg6">
				</div>
			</div>
		</div>
	</div>
<?php
	$page->close();
?>