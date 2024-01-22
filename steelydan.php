<?php
require_once("template.php");
include_once("bandPageFunctions.php");
// include_once("bandPageData/steelyDanData.php");
$page = new Template();
$page->setTitle('Donald Fagen &amp; Walter Becker | Steely Dan | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Donald Fagen &amp; Walter Becker [Steely Dan]</h1>
		<p class="blockquote">
			I was smoking with the boys upstairs<br>
			When I heard about the whole affair.<br>
			I said, "Whoa, no -- William and Mary won't do now."<br>
			Well, I did not think the girl could be so cruel<br>
			And I'm never going back to my old school.
		</p>
		<p class="blockquote-footer">
			Steely Dan, "My Old School"
		</p>
		<p>
			Donald Fagen came to Bard interested in literature and jazz and played with various bands for his first couple years. While at Bard, Fagen met Walter Becker, his future partner and co-founder of the band Steely Dan. The unique sound of Steely Dan which combined jazz harmonies and rhythms of urban blues and rock made Fagen and Becker an instant success. In 1981, Fagen began a solo career, receiving a Grammy nomination for his first album. In 1985, Fagen "came back to his old school" to receive an honorary Doctor of the Arts degree. He was interviewed by Ellen Barker for the <a href="https://digitalcommons.bard.edu/cgi/viewcontent.cgi?article=1234&context=observer" target="_blank">Bard Observer</a> at this time. In 2006, Fagen discussed the origins of Steely Dan at Bard College with <a href="https://ew.com/article/2006/03/17/origins-steely-dan/" target="_blank">Entertainment Weekly</a>.
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<!-- <div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="pb-3">
					<h3>Barnyard Stomp</h3>
					<p>From the Silver Tape, recorded in Bard Hall 1994</p>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1MlQ6BYaMhO16wDh-rGd65AnxcpuRazwm/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
			</div> -->
		<section>
			<h2 class="pb-1">Photos</h2>
			<div id="bigNoiseSlider" class="carousel" data-ride="carousel">

				<!-- Indicators -->
				<!-- <ul class="carousel-indicators">
						<li data-target="#bigNoiseSlider" data-slide-to="0" class="active"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="1"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="2"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="3"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="4"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="5"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="6"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="7"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="8"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="9"></li>
					</ul> -->

				<!-- The slideshow -->
				<div class="carousel-inner">
					<?php carouselImage("steelydan/steelydan.png", "Donald Fagen article in the Bard Observer, May 28, 1985", 2, "active") ?>
					<!-- <div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/CotF.jpg" alt="Boba Fett/CotF live" data-toggle="modal" data-target="#lsImg3">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/bobafett1BF.jpg" alt="Aaron Diskin and Nick Zinner with Boba Fett live in Tivoli" data-toggle="modal" data-target="#lsImg4">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/bobafett2BF.jpg" alt="Boba Fett live in Tivoli" data-toggle="modal" data-target="#lsImg5">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/aaron-oldgym.jpg" alt="Aaron Diskin with Boba Fett/CotF" data-toggle="modal" data-target="#lsImg6">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/aaron-oldgym2.jpg" alt="Boba Fett/CotF live" data-toggle="modal" data-target="#lsImg7">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/bobafett-nyc.jpg" alt="Challenge of the Future live" data-toggle="modal" data-target="#lsImg8">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/nickguitar.jpg" alt="Nick Zinner's guitar and effects pedals" data-toggle="modal" data-target="#lsImg9">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/bobafett95.jpg" alt="Boba Fett live on campus" data-toggle="modal" data-target="#lsImg10">
						</div>
						<div class="carousel-item">
							<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/WendellSRebelYBobaF.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg11">
						</div> -->
				</div>

				<!-- Left and right controls
					<a class="carousel-control-prev" href="#bigNoiseSlider" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#bigNoiseSlider" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>-->

			</div>
		</section>
	</aside>
</div>
<?php
// Displaying Modal Section
modalPopUp(2, "Donald Fagen article in the Bard Observer, May 28, 1985", "steelydan/steelydan.png", "Donald Fagen article in the Bard Observer, May 28, 1985");

$page->close();
?>
