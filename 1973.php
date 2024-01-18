<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('1973 | Bands of Bard | Bard Makes Noise');
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
			<h1>1973</h1>
			<p>
				Excerpted from March 9th, 1989 Bard Observer -- <a href="https://www.bard.edu/bardmakesnoise/pdfs/1973.pdf">1973: An Interview Exclusive</a> by Robin Cook:
			</p>
			<p>
				<span class="fst-italic">1973 is a band enamored of the past.  The face of the 1970s icon Barry Manilow adorns a clock in the Rhinebeck abode of Jane Brien and Lauren McMahon, who are, respectively, 1973s singer and accordionist.  Also on hand was the band’s bassist, Laura Stout, and photographer, Fran Soosman.</span>
			</p>
			<p>
				<span class="fst-italic">1973 was formed in late 1987. “I came back from a very luxurious vacation on the shores of Sicily,” McMahon recalled, “and I was thinking, ‘Gosh, wouldn’t it be good to get a band together?’ I just wanted to say something about music…but I didn’t want to be serious about it, and thought, Wow? A 70s cover band would be good.”</span>
			</p>
			<p>
				<span class="fst-italic">Thus, McMahon formed 1973 upon her return to America.  The original personnel, consisting of McMahon, Brien, Holly Brown (guitar), Melanie Chapman (bass) and Raissa St. Pierre (drums) played its first gig at the Rhinecliff Hotel in September of 1987, opening for the Electric Jellyfish.  There they met their soon-to-be guitarist, Markus Olin-Fahle.  “It was a terrible scene,” Olin-Fahle recalls, “but I really liked them a lot. They asked me to join after I told them how much I liked them, and I eagerly accepted.”</span>
			</p>
			<p>
				<span class="fst-italic">Olin-Fahle’s first show with the band was on October 30, 1987, at the apartment that Brien and McMahon shared in Tivoli.  Friends turned out in hot pants and bellbottoms to celebrate the arrival of a new music force on the Bard music scene. But, why the name 1973?</span>
			</p>
			<p>
				<span class="fst-italic">Brien stated, “We wanted to go for the 70s; the 70s is our ideal…and we all started thinking, ’71’s too early; ’71 we were six, seven, eight…that’s too young. ‘75’s in the middle of the decade, and then ’77, disco and punk… ’79 was a bummer.  So I think ’73 seemed to be the only year we could really pick.”</span>
			</p>
			<p>
				<span class="fst-italic">“Fun was our main idea, she said. “We had a philosophy that we would not take ourselves seriously…”</span>
			</p>
			<p>
				<span class="fst-italic">“The group performs a wide variety of original interpretations of 70s songs, including a medley of “Mandy” and “Angie,” entitled “Mangie.” “We perform Paul Anka, Helen Reddy, Neil Sedaka, Terry Jacks, David Essex, Barry Manilow,” said Brien.  “The kind of songs I wanted to choose were songs that, when you started to hear us play it, you would say, “Oh no, I hated that song!’”…</span>
			</p>
			<p>
				<span class="fst-italic">In the future, the band members predict that they will abandon rehearsals. “We’re beyond rehearsals.  We’re an improv band,” said McMahon.</span>
			</p>
			<p>
				<span class="fst-italic">“Even last semester, we didn’t need rehearsals,” Sollins added.</span>
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="pb-3">
					<h3>Afternoon Delight</h3>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1ZVcIl59518mk_nMY_GwFliioZfpxw8cL/preview?usp=sharing">
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
							<img src="https://www.bard.edu/bardmakesnoise/images/1973/1973a.jpg" alt="1973 live in the late 80s" data-toggle="modal" data-target="#lsImg1">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/1973/1973b.jpg" alt="1973 live in Kline Commons" data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/1973/1973poster3.jpg" alt="1973 Poster" data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/1973poster1.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg4">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/1973poster2.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg5">
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
					<h4 class="modal-title">1973 live in the late 80s</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/1973/1973a.jpg" class="img-fluid" alt="1973 live in the late 80s" data-toggle="modal" data-target="#lsImg1">
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
					<h4 class="modal-title">1973 live in Kline Commons</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/1973/1973b.jpg" alt="1973 live in Kline Commons" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">1973 Poster</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/1973/1973poster3.jpg" alt="1973 Poster of 1973" data-toggle="modal" data-target="#lsImg3">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Show Flyer</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/1973poster1.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg4">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg5">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Show Flyer</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/1973poster2.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg5">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>