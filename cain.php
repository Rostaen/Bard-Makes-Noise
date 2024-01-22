<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('C.A.I.N. | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Christ Aborted in Nativity (C.A.I.N.)</h1>
		<p>
			Christ Aborted In Nativity was formed in September 2000 by vocalist Quinton Gardner and guitarist Nate Satkewich. Their vision for C.A.I.N. was remarkably simple: to form a death and black metal crossover band that maintained clarity and definition no matter how heavy or complex the individual parts became. As Nate describes, "The mask of CAIN was not to be lightly worn...I wrote these songs to express the dismal emptiness inside. The hurt and the pain we feel when terror consumes our daily life; a once proud people of beliefs and ideals mercilessly beaten into the ground. Quinton's lyrics were simply the only words to put to this music. His bleak and apocalyptic visions as a poet, deeply moving voice and his devotion to the cause made CAIN what we were. We were fanatical in our higher mission to create art." Other band members included original drummer Dan Brunnemer and his replacement Tucker Dalton as well as keyboard player Tommy Soden. <em>[Excerpted from C.A.I.N.'s <a href="http://www.665.org/cain/">website</a> and emails from Nate Satkewich] </em>
		</p>
	</section>
	<aside class="col-lg-4 pb-3">

		<?php
		musicFile("Anarchy Enthroned", "https://drive.google.com/file/d/1-QQ4Pun20Txu1CRLYTKH-FLlPSXxZ4Nb/preview?usp=sharing");

		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["CAIN/nate.jpg", "Nate Satkewich from C.A.I.N."],
			["CAIN/quinton.jpg", "Quinton Gardner from C.A.I.N."],
			["CAIN/adam.jpg", "Adam from C.A.I.N."],
			["CAIN/jon.jpg", "Bass player from C.A.I.N."],
			["CAIN/christoph.jpg", "Dan Brunnemer from C.A.I.N."],
			["showflyers/cain-ox-pr-ainf.jpg", "Show Flyer"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>
<?php
// Displaying Modal Section
$modalData = [
	["Nate Satkewich from C.A.I.N.", "CAIN/nate.jpg", "Nate Satkewich from C.A.I.N."],
	["Quinton Gardner from C.A.I.N.", "CAIN/quinton.jpg", "Quinton Gardner from C.A.I.N."],
	["Adam from C.A.I.N.", "CAIN/adam.jpg", "Adam from C.A.I.N."],
	["Bass player from C.A.I.N.", "CAIN/jon.jpg", "Bass player from C.A.I.N."],
	["Dan Brunnemer from C.A.I.N.", "CAIN/christoph.jpg", "Dan Brunnemer from C.A.I.N."],
	["Show Flyer", "showflyers/cain-ox-pr-ainf.jpg", "Show Flyer"],
];
displayModal($modalData);
$page->close();
?>
