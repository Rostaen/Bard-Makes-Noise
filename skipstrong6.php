<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Skip Strong\'s Steamboat Six | Bands of Bard | Bard Makes Noise');
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
			<h1>Skip Strong's Steamboat Six</h1>
			<h2>Bard College Jazz Band</h2>
			<p>
				Bard yearbook, 'The Sketch Book' - written by Whitney Bolton:
			</p>
				<p class="blockquote">
					This year, under the svelte title of "Skip Strong's Steamboat Six", Bard's energetic foot-stompers brought the happy message of Dixieland Jazz into yet more young hearts. The nights of 1950-1951 found the boys playing at more Bard dances and informal "sessions" than in the previous year, when outside dates had occupied much time and music.
				</p>
				<p class="blockquote">
					With this increased local concentration, the band set a precedent that bids fair to enrich the musical life of the campus for years to come. Spring will take bassist Ted Thieme, clarinetist-"vocalist" Whit Bolton, and trombonist-leader Skip Strong to exalted positions in Army bands, but the remaining corpsmen -- trumpeter Jordan King, hot drummer Bob Weight, and the inimitable pianist Herb Severtsen -- will be on hand to form the nucleus of what may well be the finest in the long series of Bard "pop-hop" bands.
				</p>
			<p>
				Whitney Bolton today writes that: "the Bard College (Jazz) Band, a.k.a. Skip Strong's Steamboat Six; in its postgraduate form it became known as the Southampton Dixie, Racing, and Clambake Society (SDRCS), with changes in personnel as time passed..." And notes that the Bard College Jazz Band, "though chiefly a dixieland band...also performed as a dance band for college hops." <span class="fst-italic">[Email 2009]</span>
			</p>
		</div>
		<div class="col-lg-4">
			<div class="pb-4">
				<h2 class="pb-1">Photos</h2>
					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://www.bard.edu/bardmakesnoise/images/skipstong6/skipstrong6.jpg" alt="Group photo of the band holding instruments" data-toggle="modal" data-target="#lsImg1">
						</div>
					</div>
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
					<h4 class="modal-title">Skip Strong's Steamboat Six</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/skipstong6/skipstrong6.jpg" class="img-fluid" alt="Group photo of the band holding instruments">
				</div>
			</div>
		</div>
	</div>
	
<?php
	$page->close();
?>