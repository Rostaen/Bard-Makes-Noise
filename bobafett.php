<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('Boba Fett | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Boba Fett / Challenge of the Future</h1>
		<img src="https://www.bard.edu/bardmakesnoise/images/bobafett/bobafett-single.jpg" class="float-end ps-3 pb-3" alt="Album Cover" data-toggle="modal" data-target="#lsImg11">
		<p>
			The five members originally met while attending Bard College in the early 1990s. Discovering a shared love of bands such as The Fall, Can, Spacemen 3, and The Birthday Party, they formed a group in 1993 with Mike Guy and Nick Zinner on guitars, Aaron Diskin on vocals, Seth Prouty on bass, and Simon Marcus on drums. They began performing at art openings and after-hours parties around campus originally calling themselves Boba Fett (a.k.a. Boba Fett Experience). Their raucous, experimental live shows quickly elevated them to hero status at Bard. After several limited-edition releases and bootlegs of their live shows began circulating, they began performing around the northeast earning a devoted cult following. These early recordings included the "Silver Tape," which was recorded in Bard Hall in 1994 and self-released as a limited edition cassette spray painted silver. Boba Fett recorded two more albums worth of material while at Bard College, most of which has never released except for 2 songs on a 7 inch vinyl single on Dieyetribe Records (a.k.a Crink of Spleen Records originally).
		</p>
		<p>
			Boba Fett changed their name to Challenge of the Future for fear of being sued by George Lucas, and upon graduating relocated to Brooklyn, NY. There they helped lay the ground work for the late 90s Willamsburg music scene. Also during this period, Challenge of the Future were often invited back to the Bard area to play shows. In 2001, Challenge of the Future broke up with various members joining other musical projects. Aaron Diskin and Simon Marcus formed the band Lycaon Pictus with Bard alum John Christopher Morton (Aaron also joined the Punk-Klezmer band <a href="http://www.golemrocks.com/">Golem</a>). Nick Zinner devoted his energy to his then side project, the <a href="http://www.yeahyeahyeahs.com/">Yeah Yeah Yeahs</a>, who shortly thereafter became international stars. [Excerpted from the Challenge of the Future myspace page and information provided by John Morton]
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<section class="pb-3">
			<h2 class="pb-1">Music</h2>
			<?php
			$musicData = [
				["Barnyard Stomp", "https://drive.google.com/file/d/1MlQ6BYaMhO16wDh-rGd65AnxcpuRazwm/preview?usp=sharing", "From the Silver Tape, recorded in Bard Hall 1994"],
				["Big Stick", "https://drive.google.com/file/d/1cOXtmJta1FCGRfi7lueM_kbfUlf7psC1/preview?usp=sharing", "From the Silver Tape"],
				["Hudson River", "https://drive.google.com/file/d/1ZSuF4g9BZFBoCYQrv9IndF726N6WUlFV/preview?usp=sharing", "From the Silver Tape"],
				["Phenylalinine", "https://drive.google.com/file/d/1tfbaCe0cSIBsxREqKEZSBS_pPjIhsH7g/preview?usp=sharing", "from 7\" vinyl release"],
				["Rib", "https://drive.google.com/file/d/1-2a7-v6qlhgOdto6wj_vhkyZXdVuUct1/preview?usp=sharing", "Recorded in Blum 1995"],
			];
			displayMusic($musicData);
			?>
		</section>
		<?php
		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["bobafett/cotfcollage.jpg", "Boba Fett/CotF promo shots"],
			["bobafett/CotF.jpg", "Boba Fett/CotF live"],
			["bobafett/bobafett1BF", "Aaron Diskin and Nick Zinner with Boba Fett live in Tivoli"],
			["bobafett/bobafett2BF", "Boba Fett live in Tivoli"],
			["bobafett/aaron-oldgym.jpg", "Aaron Diskin with Boba Fett/CotF"],
			["bobafett/aaron-oldgym2.jpg", "Boba Fett/CotF live"],
			["bobafett/bobafett-nyc.jpg", "Challenge of the Future live"],
			["bobafett/nickguitar.jpg", "Nick Zinner's guitar and effects pedals"],
			["bobafett/bobafett95.jpg", "Boba Fett live on campus"],
			["showflyers/WendellSRebelYBobaF.jpg", "Show Flyer"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>
<?php
// Pop-up image links
$modalData = [
	["Boba Fett/CotF promo shots", "bobafett/cotfcollage.jpg", "Boba Fett/CotF promo shots"],
	["Boba Fett/CotF live", "bobafett/CotF.jpg", "Boba Fett/CotF live"],
	["Aaron Diskin and Nick Zinner with Boba Fett live in Tivoli", "bobafett/bobafett1BF.jpg", "Aaron Diskin and Nick Zinner with Boba Fett live in Tivoli"],
	["Boba Fett live in Tivoli", "bobafett/bobafett2BF.jpg", "Boba Fett live in Tivoli"],
	["Aaron Diskin with Boba Fett/CotF", "bobafett/aaron-oldgym.jpg", "Aaron Diskin with Boba Fett/CotF"],
	["Boba Fett/CotF live", "bobafett/aaron-oldgym2.jpg", "Boba Fett/CotF live"],
	["Challenge of the Future live", "bobafett/bobafett-nyc.jpg", "Challenge of the Future live"],
	["Nick Zinner's guitar and effects pedals", "bobafett/nickguitar.jpg", "Nick Zinner's guitar and effects pedals"],
	["Boba Fett live on campus", "bobafett/bobafett95.jpg", "Boba Fett live on campus"],
	["Show Flyer", "showflyers/WendellSRebelYBobaF.jpg", "Show Flyer"],
	["Album Cover", "bobafett/bobafett-single.jpg", "Album Cover"],
];
displayModal($modalData);
$page->close();
?>
