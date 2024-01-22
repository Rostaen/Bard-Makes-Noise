<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('Home | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Bard Jazz Festival</h1>
		<p>
			Guy Ducornet writes: "[This was] recorded at the 'Bard Jazz Festival of November 1959', during which the late Jeanne Lee was giving her first public performance , accompanied by Martin Siegel -- and that night Ran Blake performed for his senior project! (Kate Wolff was his adviser). The tape is still audible (even if the recording was crude...!) Ran Blake's Institute in Boston did the transfer on CD...It seems that it is the ONLY trace of that event with Tom Benjamin, Dave Moulton, Dough McLaughlin, Rudy Houk, Peter Farmer, Dick Perry , Martin Siegel... and I played the alto saxophone!!!" Read more from <a href="https://www.bard.edu/bardmakesnoise/pdfs/jazz-bardian1959.pdf" target="_blank">The Bardian</a> about this event (November 16th, 1959 Volume 1, Issue 2)
		</p>
	</section>
	<aside class="col-lg-4 pb-3">

		<?php
		$musicData = [
			["Black Is The Color MP3", "https://drive.google.com/file/d/1It1Ju8c5Zaf3MrsqtL9qGZcQoRbIPhG4/preview?usp=sharing"],
			["Evil (with <a href=\"http://en.wikipedia.org/wiki/Jeanne_Lee\" target=\"_blank\">Jeanne Lee</a>)", "https://drive.google.com/file/d/1dbAdrdXzBikgGYiu5LAwmuBAEeKp5r2_/preview?usp=sharing"],
		];
		displayMusic($musicData);
		?>
		<h2 class="pb-1">Photos</h2>
		<?php
		basicImage("bardjazzfest/guyducornet.jpg", "Guy Ducornet playing saxiphone during the Bard Jazz Festival", 1);
		?>
		</section>
	</aside>
</div>

<?php
modalPopUp(1, "Guy Ducornet Bard 1959", "bardjazzfest/guyducornet.jpg", "Guy Ducornet playing saxiphone during the Bard Jazz Festival");
$page->close();
?>
