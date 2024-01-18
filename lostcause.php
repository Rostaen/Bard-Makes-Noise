<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Lost Cause | Bands of Bard | Bard Makes Noise');
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
			<h1>Lost Cause</h1>
			<p>
				According to Charlie Lenk: <span class="fst-italic">"It’s hard to write about the Samoanz without devoting equal ink to their counterparts the Lost Cause. In many ways the bands led parallel existences: both debuted in spring 1980, both added and dropped members each semester, and both became in their separate ways the closest to musical institutions Bard had in the very early 80s. Both drew their own large and very loyal fan base with little overlap with little overlap between the two – no small feat for a student body numbering 800 at the time.</span>
			</p>
			<p>
				<span class="fst-italic">Best of all both were great party bands, roll-in-the-beer-on-the-floor great, although people will probably remember the Lost Cause as being stronger in that department if for no other reason than the Cause’s tradition of having the beer flow freely at their shows. They’re the only act I remember to place a keg onstage and invite the audience to drink from it throughout their set.</span>
			</p>
			<p>
				<span class="fst-italic">The Cause carried on for a glorious two-year run propelled by its spontaneity and fireball energy. Most of that energy came from one Ivan Stoler (82), frontman and lyricist – I can’t bring myself to call him a singer, and if I recall correctly Ivan never did either. Its audience was one that rarely minded sloppy musicianship or having abuse hurled at it, Cause trademarks for its first year. Cause fans came to be, in turn, entertained, outraged, and bawdily, lustily participatory. Ivan and company obligingly gave them all they wanted and sometimes a bit more."</span>
			</p>
			<p><a href="https://www.bard.edu/bardmakesnoise/pdfs/lostcause.pdf">Read more from Charlie Lenk about Lost Cause...</a></p>
		</div>
		<div class="col-lg-4">
			<div class="pb-4">
				<h2 class="pb-1">Photos</h2>
				<div id="bigNoiseSlider">

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://www.bard.edu/bardmakesnoise/images/lostcause/lostcause.jpg" alt="Lost Cause live at Manor" data-toggle="modal" data-target="#lsImg2">
							<p>This photo is from the Light - Bard Rock issue 1981. Photo courtesy of Tracy Roth.</p>
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
					<h4 class="modal-title">Lost Cause live at Manor</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/lostcause/lostcause.jpg" alt="Lost Cause live at Manor" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>