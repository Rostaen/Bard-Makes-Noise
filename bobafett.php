<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/bobaFettData.php");
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

		<?php
		// Displaying music section
		displayMusic($musicData);

		// Displaying Indicators, Images, and Controls
		displayCarousel($carouselData);
		?>
	</aside>
</div>
<?php
// Displaying Modal Section
displayModal($modalData);

$page->close();
?>
