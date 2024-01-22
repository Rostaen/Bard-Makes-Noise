<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/terenceBoylanData.php");
$page = new Template();
$page->setTitle('Terence Boylan | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Terence Boylan</h1>
		<img src="https://www.bard.edu/bardmakesnoise/images/tboylan/tboylan.jpg" class="float-end ps-3 pb-3" alt="Terence Boylan in front of Stone Row" data-toggle="modal" data-target="#lsImg6">
		<p>
			Terence "Boona" Boylan attended Bard College in the late 1960s where he formed various groups including the Ginger Men and the Appletree Theater with his brother John Boylan ('67) as well as recording and performing solo. Brought up in Buffalo, New York, Boylan first appeared on local radio in the late 1950s performing a song he had written at the age of 11. And while still in his mid teens, he performed in Greenwich Village, and following a chance meeting with Bob Dylan was encouraged to pursue a solo music career. During his tenure at Bard, along with his older brother John, he formed a band, the Ginger Men. Terence playing with the Ginger Men in Greenwich Village's Night Owl Café during summers and 'field-periods', and also singing solo at NY's famed Gaslight Café, the Village Gate, and Gerde's Folk City, embarked on the beginnings of his musical career. The record companies started calling and by 1967 both Terence and John Boylan had signed with Verve Records. They recorded an experimental concept album, Playback, issued in the name of the Appletree Theatre, which featured the Boylan brothers along with a dozen top studio musicians. The Appletree Theatre sessions were an attempt at a ground-breaking "concept" album (like so many of the late sixties), which fused brief Saturday Night Live type comic sketches with slightly tongue-in-cheek parodies of contemporary musical genres. After returning to Bard College in '68, Boylan teamed up with fellow students Donald Fagen and Walter Becker of Steeley Dan fame, and recorded Alias Boona at New York's Hit Factory for MGM Records. In a tip of the hat to his old mentor, Boylan recorded an entirely re-arranged version of Dylan's Subterranean Homesick Blues, sounding more like Procol Harem than early Dylan. After graduating Boylan moved to California working again with his brother John. After a few years he was signed to Asylum Records and recorded his self-titled second album in 1977. <span class="fst-italic">[Excerpted from Terence Boylan's <a href="http://www.terenceboylan.com/" target="_blank">website</a> and the Terence Boylan Wikipedia entry.]</span>
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying Music section
		displayMusic($musicData, 1);

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
