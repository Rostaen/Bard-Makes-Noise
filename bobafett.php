<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Boba Fett | Bands of Bard | Bard Makes Noise');
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
			<h1>Boba Fett / Challenge of the Future</h1>
			<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/bobafett-single.jpg" class="float-end ps-3 pb-3" alt="Album Cover" data-toggle="modal" data-target="#lsImg1">
			<p>
				The five members originally met while attending Bard College in the early 1990s. Discovering a shared love of bands such as The Fall, Can, Spacemen 3, and The Birthday Party, they formed a group in 1993 with Mike Guy and Nick Zinner on guitars, Aaron Diskin on vocals, Seth Prouty on bass, and Simon Marcus on drums. They began performing at art openings and after-hours parties around campus originally calling themselves Boba Fett (a.k.a. Boba Fett Experience). Their raucous, experimental live shows quickly elevated them to hero status at Bard. After several limited-edition releases and bootlegs of their live shows began circulating, they began performing around the northeast earning a devoted cult following. These early recordings included the "Silver Tape," which was recorded in Bard Hall in 1994 and self-released as a limited edition cassette spray painted silver. Boba Fett recorded two more albums worth of material while at Bard College, most of which has never released except for 2 songs on a 7 inch vinyl single on Dieyetribe Records (a.k.a Crink of Spleen Records originally).
			</p>
			<p>
				Boba Fett changed their name to Challenge of the Future for fear of being sued by George Lucas, and upon graduating relocated  to Brooklyn, NY. There they helped lay the ground work for the late 90s Willamsburg music scene. Also during this period, Challenge of the Future were often invited back to the Bard area to play shows. In 2001, Challenge of the Future broke up with various members joining other musical projects. Aaron Diskin and Simon Marcus formed the band Lycaon Pictus with Bard alum John Christopher Morton (Aaron also joined the Punk-Klezmer band <a href="http://www.golemrocks.com/">Golem</a>). Nick Zinner devoted his energy to his then side project, the <a href="http://www.yeahyeahyeahs.com/">Yeah Yeah Yeahs</a>, who shortly thereafter became international stars. [Excerpted from the Challenge of the Future myspace page and information provided by John Morton]
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
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
				<div>
					<h3>Big Stick</h3>
					<p>From the Silver Tape</p>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1cOXtmJta1FCGRfi7lueM_kbfUlf7psC1/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<div>
					<h3>Hudson River</h3>
					<p>From the Silver Tape</p>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1ZSuF4g9BZFBoCYQrv9IndF726N6WUlFV/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<div>
					<h3>Phenylalinine</h3>
					<p>from 7" vinyl release</p>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1tfbaCe0cSIBsxREqKEZSBS_pPjIhsH7g/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
				<div>
					<h3>Rib</h3>
					<p>Recorded in Blum 1995</p>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1-2a7-v6qlhgOdto6wj_vhkyZXdVuUct1/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
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
						<li data-target="#bigNoiseSlider" data-slide-to="3"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="4"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="5"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="6"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="7"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="8"></li>
						<li data-target="#bigNoiseSlider" data-slide-to="9"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/cotfcollage.jpg" alt="Boba Fett/CotF promo shots" data-toggle="modal" data-target="#lsImg2">
						</div>
						<div class="carousel-item">
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
					<h4 class="modal-title">Album Cover</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/bobafett-single.jpg" class="img-fluid" alt="Album Cover">
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
					<h4 class="modal-title">Boba Fett/CotF promo shots</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/cotfcollage.jpg" alt="Boba Fett/CotF promo shots" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg3">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Boba Fett/CotF live</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/CotF.jpg" alt="Boba Fett/CotF live" data-toggle="modal" data-target="#lsImg3">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg4">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Aaron Diskin and Nick Zinner with Boba Fett live in Tivoli</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/bobafett1BF.jpg" alt="Aaron Diskin and Nick Zinner with Boba Fett live in Tivoli" data-toggle="modal" data-target="#lsImg4">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg5">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Boba Fett live in Tivoli</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/bobafett2BF.jpg" alt="Boba Fett live in Tivoli" data-toggle="modal" data-target="#lsImg5">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg6">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Aaron Diskin with Boba Fett/CotF</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/aaron-oldgym.jpg" alt="Aaron Diskin with Boba Fett/CotF
" data-toggle="modal" data-target="#lsImg6">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg7">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Boba Fett/CotF live</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/aaron-oldgym2.jpg" alt="Boba Fett/CotF live" data-toggle="modal" data-target="#lsImg7">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg8">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Challenge of the Future live</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/bobafett-nyc.jpg" alt="Challenge of the Future live" data-toggle="modal" data-target="#lsImg8">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg9">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Nick Zinner's guitar and effects pedals</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/nickguitar.jpg" alt="Nick Zinner's guitar and effects pedals" data-toggle="modal" data-target="#lsImg9">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg10">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Boba Fett live on campus</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/bobafett95.jpg" alt="Boba Fett live on campus" data-toggle="modal" data-target="#lsImg10">
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="lsImg11">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Show Flyer</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/WendellSRebelYBobaF.jpg" alt="Show Flyer" data-toggle="modal" data-target="#lsImg11">
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>