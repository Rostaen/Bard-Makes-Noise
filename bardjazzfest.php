<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Home | Bard Makes Noise');
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
			<h1>Bard Jazz Festival</h1>
			<p>
				Guy Ducornet writes: "[This was] recorded at the 'Bard Jazz Festival of November 1959', during which the late Jeanne Lee was giving her first public performance , accompanied by Martin Siegel -- and that night Ran Blake performed for his senior project! (Kate Wolff was his adviser). The tape is still audible (even if the recording was crude...!) Ran Blake's Institute in Boston did the transfer on CD...It seems that it is the ONLY trace of that event with Tom Benjamin), Dave Moulton, Dough McLaughlin, Rudy Houk, Peter Farmer, Dick Perry , Martin Siegel... and I played the alto saxophone!!!" Read more from <a href="https://www.bard.edu/bardmakesnoise/pdfs/jazz-bardian1959.pdf" target="_blank">The Bardian</a> about this event (November 16th, 1959 Volume 1, Issue 2)
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="pb-3">
					<h3>Black Is The Color MP3</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1It1Ju8c5Zaf3MrsqtL9qGZcQoRbIPhG4/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<div>
					<h3>Evil (with <a href="http://en.wikipedia.org/wiki/Jeanne_Lee" target="_blank">Jeanne Lee</a> '60) MP3</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1dbAdrdXzBikgGYiu5LAwmuBAEeKp5r2_/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<h2 class="pb-1">Photos</h2>
				<img src="https://www.bard.edu/bardmakesnoise/images/bardjazzfest/guyducornet.jpg" alt="Guy Ducornet playing saxiphone during the Bard Jazz Festival" class="img-fluid ps-3 pb-3" data-toggle="modal" data-target="#lsImg1">
			</div>
		</div>
	</div>

	<div class="modal" id="lsImg1">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Guy Ducornet Bard 1959</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bardjazzfest/guyducornet.jpg" alt="Guy Ducornet playing saxiphone during the Bard Jazz Festival" class="img-fluid">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>