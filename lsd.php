<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Leon\'s Sanguine Delight | Bands of Bard | Bard Makes Noise');
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
			<h1>Leon's Sanguine Delight</h1>
			<p>
				A true psychedelic jam band performing original space-jams, along with an instrumental cover of  Dave Brubeck's 'Take Five' as an intro tune.
			</p>
			<p>
				<ul>
					<li>Dan McBride (class of '88): Rhythm and Lead Guitar</li>
					<li>Steve Chun (class of '87): Bass</li>
					<li>Doug Eich (class of '88): Drums</li>
					<li>Harold Lehman (class of '87): Lead and Rhythm Guitar & Electronic Effects</li>
				</ul>
			</p>
			<p>
				*Ben Fiering (class of '86) guest vocals on Got My Mojo Working and 32-20 Blues
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="mb-3">
					<iframe width="100%" height="150" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/413925393&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/leons-sanguine-delight" title="Leon&#x27;s Sanguine Delight" target="_blank" style="color: #cccccc; text-decoration: none;">Leon&#x27;s Sanguine Delight</a> · <a href="https://soundcloud.com/leons-sanguine-delight/live-at-sottery-hall-with-ben-fiering-september-28-1986" title="L.S.D. - Live at Sottery Hall  -  September 28th 1985" target="_blank" style="color: #cccccc; text-decoration: none;">L.S.D. - Live at Sottery Hall  -  September 28th 1985</a></div>
				</div>
				<div class="mb-3">
					<iframe width="100%" height="150" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/413899767&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/leons-sanguine-delight" title="Leon&#x27;s Sanguine Delight" target="_blank" style="color: #cccccc; text-decoration: none;">Leon&#x27;s Sanguine Delight</a> · <a href="https://soundcloud.com/leons-sanguine-delight/live-at-sottery-hall-with-ben-fiering-september-28-1985" title="Live at Sottery Hall - with Ben Fiering -  September 28 1985" target="_blank" style="color: #cccccc; text-decoration: none;">Live at Sottery Hall - with Ben Fiering -  September 28 1985</a></div>
				</div>
				<div>
					<h3>More on Sound Cloud</h3>
					<p>
						<a href="https://soundcloud.com/leons-sanguine-delight" target="_blank">Leon's Sanguine Delight on Sound Cloud</a>
					</p>
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
							<img src="https://www.bard.edu/bardmakesnoise/images/lsd/lsd1.jpg" alt="Harold Lehman and Dan McBride 1984" data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/lsd/lsd2.jpg" alt="Dan McBride and Harold Lehman" data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/lsd/lsdReview.png" alt="L.S.D. review in Bard Weekly Fall '85" data-toggle="modal" data-target="#lsImg4">
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
					<h4 class="modal-title">Harold Lehman and Dan McBride 1984</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/lsd/lsd1.jpg" alt="Harold Lehman and Dan McBride 1984" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Dan McBride and Harold Lehman</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/lsd/lsd2.jpg" alt="Dan McBride and Harold Lehman" data-toggle="modal" data-target="#lsImg3">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">L.S.D. review in Bard Weekly Fall '85</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/lsd/lsdReview.png" alt="L.S.D. review in Bard Weekly Fall '85" data-toggle="modal" data-target="#lsImg3" style="width: 75%;">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>