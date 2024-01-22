<?php
require_once("template.php");
include_once("bandPageFunctions.php");
include_once("bandPageData/lsdData.php");
$page = new Template();
$page->setTitle('Leon\'s Sanguine Delight | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Leon's Sanguine Delight</h1>
		<p>
			A true psychedelic jam band performing original space-jams, along with an instrumental cover of Dave Brubeck's 'Take Five' as an intro tune.
		</p>
		<p>
		<ul>
			<li>Dan McBride (class of '88): Rhythm and Lead Guitar</li>
			<li>Steve Chun (class of '87): Bass</li>
			<li>Doug Eich (class of '88): Drums</li>
			<li>Harold Lehman (class of '87): Lead and Rhythm Guitar & Electronic Effects</li>
		</ul>
		</p>
		<p>
			*Ben Fiering (class of '86) guest vocals on Got My Mojo Working and 32-20 Blues
		</p>
	</section>
	<aside class="col-lg-4 pb-3">

		<div class="mb-3">
			<iframe width="100%" height="150" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/413925393&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
			<div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/leons-sanguine-delight" title="Leon&#x27;s Sanguine Delight" target="_blank" style="color: #cccccc; text-decoration: none;">Leon&#x27;s Sanguine Delight</a> · <a href="https://soundcloud.com/leons-sanguine-delight/live-at-sottery-hall-with-ben-fiering-september-28-1986" title="L.S.D. - Live at Sottery Hall  -  September 28th 1985" target="_blank" style="color: #cccccc; text-decoration: none;">L.S.D. - Live at Sottery Hall - September 28th 1985</a></div>
		</div>
		<div class="mb-3">
			<iframe width="100%" height="150" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/413899767&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
			<div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/leons-sanguine-delight" title="Leon&#x27;s Sanguine Delight" target="_blank" style="color: #cccccc; text-decoration: none;">Leon&#x27;s Sanguine Delight</a> · <a href="https://soundcloud.com/leons-sanguine-delight/live-at-sottery-hall-with-ben-fiering-september-28-1985" title="Live at Sottery Hall - with Ben Fiering -  September 28 1985" target="_blank" style="color: #cccccc; text-decoration: none;">Live at Sottery Hall - with Ben Fiering - September 28 1985</a></div>
		</div>
		<div>
			<h3>More on Sound Cloud</h3>
			<p>
				<a href="https://soundcloud.com/leons-sanguine-delight" target="_blank">Leon's Sanguine Delight on Sound Cloud</a>
			</p>
		</div>
		</section>
		<?php
		// Displaying Indicators, Images, and Controls
		displayCarousel($carouselData);
		?>
	</aside>
</div>
<?
// Displaying Modal Section
displayModal($modalData);

$page->close();
?>
