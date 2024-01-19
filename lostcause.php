<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('Lost Cause | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Lost Cause</h1>
		<p>
			According to Charlie Lenk: <span class="fst-italic">"It’s hard to write about the Samoanz without devoting equal ink to their counterparts the Lost Cause. In many ways the bands led parallel existences: both debuted in spring 1980, both added and dropped members each semester, and both became in their separate ways the closest to musical institutions Bard had in the very early 80s. Both drew their own large and very loyal fan base with little overlap with little overlap between the two – no small feat for a student body numbering 800 at the time.</span>
		</p>
		<p>
			<span class="fst-italic">Best of all both were great party bands, roll-in-the-beer-on-the-floor great, although people will probably remember the Lost Cause as being stronger in that department if for no other reason than the Cause’s tradition of having the beer flow freely at their shows. They’re the only act I remember to place a keg onstage and invite the audience to drink from it throughout their set.</span>
		</p>
		<p>
			<span class="fst-italic">The Cause carried on for a glorious two-year run propelled by its spontaneity and fireball energy. Most of that energy came from one Ivan Stoler (82), frontman and lyricist – I can’t bring myself to call him a singer, and if I recall correctly Ivan never did either. Its audience was one that rarely minded sloppy musicianship or having abuse hurled at it, Cause trademarks for its first year. Cause fans came to be, in turn, entertained, outraged, and bawdily, lustily participatory. Ivan and company obligingly gave them all they wanted and sometimes a bit more."</span>
		</p>
		<p><a href="https://www.bard.edu/bardmakesnoise/pdfs/lostcause.pdf">Read more from Charlie Lenk about Lost Cause...</a></p>
	</section>
	<aside class="col-lg-4">
		<div class="pb-4">
			<h2 class="pb-1">Photos</h2>
			<div id="bigNoiseSlider">

				<!-- The slideshow -->
				<div class="carousel-inner">
					<?php
					carouselImageFirst("lostcause/lostcause.jpg", "Lost Cause live at Manor", 2)
					?>
				</div>

			</div>
		</div>
	</aside>
</div>
<?php
// Pop-up image links
modalPopUp(2, "Lost Cause live at Manor", "lostcause/lostcause.jpg", "Lost Cause live at Manor");

$page->close();
?>
