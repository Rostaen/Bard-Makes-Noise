<?php
require_once("template.php");
include_once("bandPageFunctions.php");

$page = new Template();
$page->setTitle('AD | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>

<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>AD</h1>
		<p>
			Anthony DeMore was the founder and lead vocalist of the hip-hop, metal band "AD". With lyrics driven by socio-politically and environmentally charged themes, the band found a new level of heaviness when David Tarica was added in 1989. With Tarica's monster guitar riffs and DeMore's potent raps, the band quickly became a Bard favorite. After graduation, the AD lineup changed and they moved to New York City securing a record deal with Rage Records. They toured all over Europe and recorded two CD’s before splitting up in the late 90s.
		</p>
	</section>
	<aside class="col-lg-4 pb-3">

		<?php
		$musicData = [
			["Deadzone", "https://drive.google.com/file/d/1aVemhBFle6r5ktlZ2OEppJ7QFcqCl_-d/preview?usp=sharing"],
			["Threat With Intellect", "https://drive.google.com/file/d/12lH9zziFE37iWL4_8Vcx5A2ltOoVA-z9/preview?usp=sharing"],
			["Whole House Panicked", "https://drive.google.com/file/d/13P_BrgI4YEOvVz5PhgLmA_Bx7aOzoO4o/preview?usp=sharing"],
		];
		displayMusic($musicData);
		?>
		</section>
		<section class="pb-4">
			<h2 class="pb-1">Photos</h2>
			<div id="bigNoiseSlider">

				<!-- The slideshow -->
				<div class="carousel-inner">
					<?php
					carouselImageFirst("band-a-d-images/adcover.jpg", "AD Album Cover", 2);
					?>
				</div>

			</div>
		</section>
	</aside>
</div>
<!-- Carousel Images -->
<?php
modalPopUp(2, "AD Album Cover", "band-a-d-images/adcover.jpg", "AD Album Cover");
$page->close();
?>
