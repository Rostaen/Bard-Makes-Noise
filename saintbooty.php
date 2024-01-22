<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('Saint Booty | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8 pb-3">
		<h1>Saint Booty</h1>
		<p>
			Featured were Ian Zimmerman (vocals), Jody Cornish (vocals), Ross Shain (bass), Ted Gannon (guitar), Rob Brunner (drums), Zach Smith (keyboards), Derek Brain (trumpet), John Durham (saxophone), Andy West (trombone), and Dave Tarica (part-time percussion player). Before Saint Booty, these musicians were in various Bard bands including Pimp Daddy, Vick Vegas and Velcro Dildo.<em> Audio files provided by Mike Parker.</em>
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php videoFile("Video", "https://www.youtube.com/embed/6mPuKacBCK8"); ?>

		<?php
		$musicData = [
			["Intro", "https://drive.google.com/file/d/1dPaU0RqLuxXvzM2_BOpD2pJhFxGAw34F/preview?usp=sharing"],
			["Clyde", "https://drive.google.com/file/d/1O8FWtX4lp2LGyp2btN3A0Qxe7fvTQ1cY/preview?usp=sharing"],
			["Exit", "https://drive.google.com/file/d/1QrcO5bR4wpx9a-AOmzuO5pUyXc3Nhqvc/preview?usp=sharing"],
			["Major Mack", "https://drive.google.com/file/d/1pEXLUlnqqiLVmAQifEfLw0qeptGjq3n1/preview?usp=sharing"],
			["Risin' High", "https://drive.google.com/file/d/1cewxpjR1EjYGwMsud0PSMEP7RHPBIfwL/preview?usp=sharing"],
		];
		displayMusic($musicData);

		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["stbooty/stbooty-japan.jpg", "Saint Booty in Japan"],
			["stbooty/stbootyvassar.jpg", "Saint Booty promotional photo"],
			["stbooty/stbootypromo.jpg", "Saint Booty"],
			["stbooty/stbooty-ian.jpg", "Ian Zimmerman of Saint Booty"],
			["showflyers/stbooty1.jpg", "Show Flyer"],
			["showflyers/stbooty2.jpg", "Show Flyer"],
			["showflyers/stbooty3.jpg", "Show Flyer"],
			["showflyers/stbooty4.jpg", "Show Flyer"],
			["showflyers/stbooty5.jpg", "Show Flyer"],
		];
		displayImages($carouselData);
		?>
	</aside>
</div>
<?php
// Displaying Modal Section
$modalData = [
	["Saint Booty in Japan", "stbooty/stbooty-japan.jpg", "Saint Booty in Japan"],
	["Saint Booty live", "stbooty/stbootyvassar.jpg", "Saint Booty live"],
	["Saint Booty promotional photo", "stbooty/stbootypromo.jpg", "Saint Booty promotional photo"],
	["Ian Zimmerman of Saint Booty", "stbooty/stbooty-ian.jpg", "Ian Zimmerman of Saint Booty"],
	["Show Flyer", "showflyers/stbooty1.jpg", "Show Flyer"],
	["Show Flyer", "showflyers/stbooty2.jpg", "Show Flyer"],
	["Show Flyer", "showflyers/stbooty3.jpg", "Show Flyer"],
	["Show Flyer", "showflyers/stbooty4.jpg", "Show Flyer"],
	["Show Flyer", "showflyers/stbooty5.jpg", "Show Flyer"],
];
displayModal($modalData);
$page->close();
?>
