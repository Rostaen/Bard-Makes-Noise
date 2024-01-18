<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Suzy Jaguar &amp; the Mechanics | Bands of Bard | Bard Makes Noise');
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
			<h1>Suzy Jaguar &amp; the Mechanics</h1>
			<p>
				According to Suzy Barocas Perler: "The band started in '81...a few weeks after I just arrived. Charlie Lenk, our drummer, saw I had an electric guitar and a much needed car and immediately introduced me to Michael O'Brien, our brilliant lead guitarist. He was my guitar hero. Michael wrote most of the songs but I got to write one of our more popular songs 'Boyfriend Material.' That was fun to sing...I mean scream out. A little R rated so definitely not a song to share with my kids around the campfire. I'm never good with categorizing music so I'd say our music was a combo of new wave, punk, rock. Innovative, to say the least. I have dim memories of us in our black leather jackets practicing in a dark barn-like room and Abdi, our bass player, constantly singing out 'oy, oy, oy' whenever he could. We played at school and around town-mostly at The Whaleback. We didn't get paid much but always got free drinks. I loved being the only female. These guys were so unbelievably cool. They graduated before me so I sure missed my boys when they were gone!" <span class="fst-italic">[Quoted from email 2008]</span>
			</p>
			<p>
				Suzy, a mom and artist, stills plays that same Fender Strat in a successful New Jersey all female rock band, The Mood Swings.
			</p>
		</div>
		<div class="col-lg-4 pb-3">
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
							<img src="https://www.bard.edu/bardmakesnoise/images/suzyjaguar/SJM.jpg" alt="Suzy Jaguar &amp; the Mechanics live outside Stone Row" data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/suzyjaguar/SJM2.jpg" alt="Suzy Jaguar &amp; the Mechanics live outside Stone Row" data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/suzyjaguar/SJM-Abdi.jpg" alt="Suzy Jaguar &amp; the Mechanics live outside Stone Row" data-toggle="modal" data-target="#lsImg4">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/suzyjaguar/SJM-Michael.jpg" alt="Suzy Jaguar &amp; the Mechanics live outside Stone Row" data-toggle="modal" data-target="#lsImg5">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/suzyjaguar/SJM-Ivan.jpg" alt="Suzy Jaguar &amp; the Mechanics live outside Stone Row" data-toggle="modal" data-target="#lsImg6">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/suzyjaguar/SJM-Ivan2.jpg" alt="Suzy Jaguar &amp; the Mechanics live outside Stone Row" data-toggle="modal" data-target="#lsImg7">
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
					<h4 class="modal-title">Suzy Jaguar &amp; the Mechanics live outside Stone Row</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/suzyjaguar/SJM.jpg" alt="Suzy Jaguar &amp; the Mechanics live outside Stone Row" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Suzy Jaguar &amp; the Mechanics live outside Stone Row</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/suzyjaguar/SJM2.jpg" alt="Suzy Jaguar &amp; the Mechanics live outside Stone Row" data-toggle="modal" data-target="#lsImg3">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Suzy Jaguar &amp; the Mechanics live outside Stone Row</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/suzyjaguar/SJM-Abdi.jpg" alt="Suzy Jaguar &amp; the Mechanics live outside Stone Row" data-toggle="modal" data-target="#lsImg4">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg5">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Suzy Jaguar &amp; the Mechanics live outside Stone Row</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/suzyjaguar/SJM-Michael.jpg" alt="Suzy Jaguar &amp; the Mechanics live outside Stone Row" data-toggle="modal" data-target="#lsImg5">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg6">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Suzy Jaguar &amp; the Mechanics live outside Stone Row</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/suzyjaguar/SJM-Ivan.jpg" alt="Suzy Jaguar &amp; the Mechanics live outside Stone Row" data-toggle="modal" data-target="#lsImg6">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg7">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Suzy Jaguar &amp; the Mechanics live outside Stone Row</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/suzyjaguar/SJM-Ivan2.jpg" alt="Suzy Jaguar &amp; the Mechanics live outside Stone Row" data-toggle="modal" data-target="#lsImg7">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>