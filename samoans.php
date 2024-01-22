<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/samoansData.php");
$page = new Template();
$page->setTitle('The Samoans | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>The Samoans (Samoanz)</h1>
		<p>
			According to Art Carlson, the Samoans' name was inspired by a WWF tag team managed by Captain Lou Albano. At some point, the name morphed into the Samoanz. All of the band members were big wrestling fans, who loved its "silly, over the top" quality. The music was "sort of jokey, punk rock," and their most popular song was "Fucking Homos," an ironic song written by Chris Cochrane. Nayland Blake wrote a prescient song that included lyrics to the effect of: "I'm gonna put a hole in the Ayatollah; I'll see you in Pakistan..." The Samoans lasted for about a year. <span class="fst-italic">[phone interview 2009]</span>
		</p>
		<p>
			Doug Henderson remembers: "...the original Samoans lineup was myself, Art Carlson, Chris Cochrane, Jimmy Rodewald, Glen [Carter]. Then Mark Kirby turned up from San Francisco about 3 hours before the spring fling at Blithewood and subbed for Glen who had moved on. Art shifted to the Trolls, Nayland took over singing, Guy Yarden joined on Farfisa keyboard and Marc Dale took over on bass. I remember Marc being hassled...he was confused with Kirby (who did not attend Bard and was discouraged from enjoying the life of the campus) and they didn't want us doing our somewhat unauthorized night rehearsals in the chapel. There was some guy named Mark Green who played drums at some point...there was also a lot of rather pure LSD coming from the West coast...Somewhere in there the Lung Rugs materialized as a kind of demented surf band. I know Chris and Nayland were in that one (was I???). Also in the last year, 82, Chris and I formed a power trio with Stu Woods called, possibly, Resistance. After graduating I was still living in Upper Red Hook working on a farm and formed the Future Forefathers with Guy Yarden on violin and my brother David on saxophone." <span class="fst-italic">[Email 2009]</span>
		</p>
		<p>
			<a href="https://www.bard.edu/bardmakesnoise/pdfs/samoanz.pdf">Read more about the Samoanz from Charlie Lenk</a>
		</p>
	</section>
	<aside class="col-lg-4">
		<?php
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
