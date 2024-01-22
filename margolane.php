<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/margoLaneData.php");
$page = new Template();
$page->setTitle('Margo Lane | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Margo Lane</h1>
		<p>
			Ross Goodman says: <em>"Margo Lane's genius was born out of countless hours of playing the same six songs in Audio Co-op. Ross (guitar) wanted to sound like Superchunk, Polvo and The Minutemen, but mostly wanted to escape the terrible tofu farts of drummer (now famed magician) Albert. Bassist and cartoonist Karen had very pleasing handwriting. The band existed between a wonderfully mournful valley of not being as technically proficient as <a href="spineless.php">Spineless</a> and not being as good looking/well dressed as the Mike Guy Experience (later <a href="bobafett.php">The Boba Fett Experience</a>). Their flame would die out by everyone's senior year as different interest and a general lack of having new songs would take its toll on the band 'making it.'"</em> [Email 2010]
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying music section
		displayMusic($musicData);
		?>
	</aside>
</div>

<?php
$page->close();
?>
