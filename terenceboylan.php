<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Terence Boylan | Bands of Bard | Bard Makes Noise');
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
			<h1>Terence Boylan</h1>
			
			<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/tboylan.jpg" class="float-end ps-3 pb-3" alt="Terence Boylan in front of Stone Row" data-toggle="modal" data-target="#lsImg1">
			<p>
				Terence "Boona" Boylan attended Bard College in the late 1960s where he formed various groups including the Ginger Men and the Appletree Theater with his brother John Boylan ('67) as well as recording and performing solo. Brought up in Buffalo, New York, Boylan first appeared on local radio in the late 1950s performing a song he had written at the age of 11. And while still in his mid teens, he performed in Greenwich Village, and following a chance meeting with Bob Dylan was encouraged to pursue a solo music career. During his tenure at Bard, along with his older brother John, he formed a band, the Ginger Men. Terence playing with the Ginger Men in Greenwich Village’s Night Owl Café during summers and ‘field-periods’, and also singing solo at NY’s famed Gaslight Café, the Village Gate, and Gerde’s Folk City, embarked on the beginnings of his musical career. The record companies started calling and by 1967 both Terence and John Boylan had signed with Verve Records. They recorded an experimental concept album, Playback, issued in the name of the Appletree Theatre, which featured the Boylan brothers along with a dozen top studio musicians. The Appletree Theatre sessions were an attempt at a ground-breaking "concept" album (like so many of the late sixties), which fused brief Saturday Night Live type comic sketches with slightly tongue-in-cheek parodies of contemporary musical genres. After returning to Bard College in ‘68, Boylan teamed up with fellow students Donald Fagen and Walter Becker of Steeley Dan fame, and recorded Alias Boona at New York’s Hit Factory for MGM Records. In a tip of the hat to his old mentor, Boylan recorded an entirely re-arranged version of Dylan’s Subterranean Homesick Blues, sounding more like Procol Harem than early Dylan. After graduating Boylan moved to California working again with his brother John. After a few years he was signed to Asylum Records and recorded his self-titled second album in 1977. <span class="fst-italic">[Excerpted from Terence Boylan's <a href="http://www.terenceboylan.com/" target="_blank">website</a> and the Terence Boylan Wikipedia entry.]</span>
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="pb-3">
					<h3>What a Way to Go</h3>
					<p>The Appletree Theater from <span class="fst-italic">Playback</span></p>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1Tn4enUjQM8EWhTewnz4rzs-uVfUkVJKA/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<div>
					<h3>Subterranean Homsick Blues</h3>
					<p>from <span class="fst-italic">Alias Boona</span> featuring Donald Fagen and Walter Becker</p>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1GGD8F5DdSZz1bsKFnOlNkfQMIJ3DhLGJ/preview?usp=sharing">
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
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/Gingermen1.JPG" alt="The Ginger Men" data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/Gingermen2.JPG" alt="The Ginger Men outside the Night Owl cafe 1" data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/Gingermen3.jpg" alt="The Ginger Men outside the Night Owl cafe 2" data-toggle="modal" data-target="#lsImg4">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/appletreetheater.jpg" alt="Appletree Theatre Poster" data-toggle="modal" data-target="#lsImg5">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/aliasboona.jpg" alt="Alias Boona album cover" data-toggle="modal" data-target="#lsImg6">
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
					<h4 class="modal-title">Terence Boylan in front of Stone Row</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/tboylan.jpg" class="img-fluid" alt="Terence Boylan in front of Stone Row">
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
					<h4 class="modal-title">The Ginger Men</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/Gingermen1.JPG" alt="The Ginger Men" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">The Ginger Men outside the Night Owl cafe 1</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/Gingermen2.JPG" alt="The Ginger Men outside the Night Owl cafe 1">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">The Ginger Men outside the Night Owl cafe 2</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/Gingermen3.jpg" alt="The Ginger Men outside the Night Owl cafe 2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg5">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Appletree Theatre Poster</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/appletreetheater.jpg" alt="Appletree Theatre Poster">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg6">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Alias Boona album cover</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/aliasboona.jpg" alt="Alias Boona album cover">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>