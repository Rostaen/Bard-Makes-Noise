<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/beastieBoysData.php");
$page = new Template();
$page->setTitle('Beastie Boys | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Beastie Boys</h1>
		<p>
			One of the more infamous Bard-connected bands. Adam Yauch (1964–2012) founded the group with two friends while in high school in Brooklyn. During his time at Bard, Yauch studied electronic music and credited Professor Emeritus Elie Yarden with expanding his concept of music and sound. As a result "Yauch developed a new line-up, the hip-hop trio with Diamond and Horovitz, and then dropped out after two years... Their debut rap record, Cooky Puss, came in 1983" (<a href="https://www.theguardian.com/music/2012/may/05/adam-yauch" target="_blank">The Guardian</a>). In 2011, Yauch received the Charles Flint Kellogg Award in Arts and Letters, Bard's highest award in the arts, from the Bard College Alumni/ae Association. <a href="http://blog.beastieboys.com/post/5730508786/bard-visit" target="_blank">Read Adam's BeastieBoys.com blog entry about coming back to Bard</a>.
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying Indicators, Images, and Controls
		displayBasicImg($imageData);
		?>
	</aside>
</div>
<?php
// Displaying Modal Section
displayModal($modalData);

$page->close();
?>
