<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Bluegrass Partners | Bands of Bard | Bard Makes Noise');
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
			<h1>Bluegrass Partners</h1>
			<h2>A.K.A. The New Union String Band</h2>
			<p>
				According to Brian Nielsen (email 2009): <span class="fst-italic">"Not a rock band, but a bluegrass band. We formed immediately within the first week school started, as by chance we all were in Albee hall (how that happened I have no idea). Members were: myself (mandolin), Chris Guest (guitar), Phil Terry (fiddle), and John Kornhauser (dobro). John was a sophomore and he and I were in the same suite (he had one of the 'side rooms' in the suite arrangement, I had what might be called the common room). Chris, who of course went on to bigger things, and Phil were both freshmen like myself. The band lived that whole academic year, but then Chris transferred to NYU. Phil and I were still doing some things after that, and I don't remember what happened with John.</span>
			</p>
			<p>
				<span class="fst-italic">We played the Red Balloon and at least one show in the gym and at least one show on the lawn between Albee and Wardens. Somebody got the Lilly Brothers to come do a show that year, and we played both as an 'opening act' for them and with them directly. We played the Bitter End in the city once (audition night) and were offered a regular gig there, but not something we could do. The big event was the 'Northeastern States Folk Festival,' held annually at Hamilton College, to which we drove in two cars in early 1967. It was perhaps the fifth year it had run, though I really don't remember, attracting acts from several schools, mostly New York state. Anyway, a pretty big deal, we thought. We won first place.</span>
			</p>
			<p>
				<span class="fst-italic">With Chris' connections in New York we got an audition in Spring 1967 with Paul Stookey (of Peter, Paul & Mary) to possibly be an opening act for them, but no go.</span>
			</p>
			<p>
				<span class="fst-italic">We played a fair amount around campus that one year. I recall that Robert Coover enjoyed our stuff, something I was especially pleased about after having read The Universal Baseball Association, in which bluegrass figured. There was a controversy because we had a song, 'Purple Heart,' in our repertoire, and someone thought it was somehow disrespectful of the seriousness of the Vietnam war, but we didn't think it was and didn't stop doing it. (It was a great song: 'They sent him to Viet Nam / His heart was young and gay / It's hard for me to realize / They'd bring him home this way. // Another heart is broken / Another journey's done / His mother has a purple heart / In memory of her son.'"</span>
			</p>
		</div>
		<div class="col-lg-4">
			<div class="pb-4">
				<h2 class="pb-1">Photos</h2>
				<div id="bigNoiseSlider" class="carousel" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#bigNoiseSlider" data-slide-to="0" class="active"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="1"></li>
					</ul>
					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://www.bard.edu/bardmakesnoise/images/bluegrasspartners/observer3-21-67.jpg" alt="Bard Observer article on Bluegrass Partners" data-toggle="modal" data-target="#lsImg1">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bluegrasspartners/bluegrass partners chip.jpg" alt="CHG [Christopher Haden-Guest] and the Bluegrass Partners (Photo courtesy of Brian Nielsen)" data-toggle="modal" data-target="#lsImg2">
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
					<h4 class="modal-title">Skip Strong's Steamboat Six</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bluegrasspartners/observer3-21-67.jpg" class="img-fluid" alt="Bard Observer article on Bluegrass Partners">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg2">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">CHG [Christopher Haden-Guest] and the Bluegrass Partners (Photo courtesy of Brian Nielsen)</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bluegrasspartners/bluegrass partners chip.jpg" class="img-fluid" alt="CHG [Christopher Haden-Guest] and the Bluegrass Partners (Photo courtesy of Brian Nielsen)">
				</div>
			</div>
		</div>
	</div>
	
<?php
	$page->close();
?>