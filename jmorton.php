<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/jMortonData.php");
$page = new Template();
$page->setTitle('John Christopher Morton | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>John Christopher Morton</h1>
		<img src="https://www.bard.edu/bardmakesnoise/images/johnmorton/johnmorton.jpg" class="float-end ps-3 pb-3" alt="John Chrisopher Morton a.k.a. DJ Rollenbutter" data-toggle="modal" data-target="#lsImg2">
		<p>
			Besides being a key player in the Boba Fett/Challenge of the Future camp and serving on the Entertainment Committee, John Morton helped establish "drum and bass" and "jungle" electronic music styles as part of Bard's DJ scene. His DJ performances as DJ Rollenbutter and his Faceship and Ricelab events were instrumental in pushing the boundaries between popular and experimental music. As a student, John also started the record label Dieyetribe Records and its umbrella company TionalcuitMpany, which additionally managed John and Dan Vena's "controversial" comic strip Retina Soybean and the various Ricelab events. John's Dieyetribe label released various works by student bands and musicians including the compilation album of electronic music titled <em>Technology Doesn't Stop the Imp Next Door</em>. Initially John and various creative comrades founded "The Faceship," a house located off-campus in Rhinebeck which served as a collaborative performance space. But eventually when Boba Fett/Challenge of the Future vacated 32 Broadway in Tivoli to relocate to Brooklyn, John inherited the space. John and his high school friend Karl Krantz developed Ricelab around this time, which evolved into a series of parties with performances by bands and DJs (Challenge of the Future was often invited back to the area to play). After graduation, John continued to DJ around campus and Tivoli through his connection with Nathan Corbin, but he also relocated to Brooklyn and released Challenge of the Future's <em>Everyone Everyone Everyone</em> album and Christian Sutter's (a.k.a. DJ Krishna) <em>100 Tubes</em> EP on his Dieyetribe label. John also joined Boba Fett/Challenge of the Future alums Aaron Diskin and Simon Marcus in forming the band Lycaon Pictus.
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
