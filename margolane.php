<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Margo Lane | Bands of Bard | Bard Makes Noise');
	$page->setMetaKW('');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>
<style>
	/* Make the image fully responsive */
	.carousel-inner img {
		width: 100%;
		height: 100%;
	}
</style>
	<div class="row lt-gray">
		<div class="col-lg-8">
			<h1>Margo Lane</h1>
			<p>
				Ross Goodman says: <em>"Margo Lane's genius was born out of countless hours of playing the same six songs in Audio Co-op. Ross (guitar) wanted to sound like Superchunk, Polvo and The Minutemen, but mostly wanted to escape the terrible tofu farts of drummer (now famed magician) Albert. Bassist and cartoonist Karen had very pleasing handwriting. The band existed between a wonderfully mournful valley of not being as technically proficient as <a href="spineless.php">Spineless</a> and not being as good looking/well dressed as the Mike Guy Experience (later <a href="bobafett.php">The Boba Fett Experience</a>). Their flame would die out by everyone's senior year as different interest and a general lack of having new songs would take its toll on the band 'making it.'"</em> [Email 2010]
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<div class="pb-3">
				<h2 class="pb-1">Music</h2>
				<div class="pb-3">
					<h3>Zutroid</h3>
					<p>May 1994</p>
					<div style="width: 100%; height: 100px; position: relative;">
						<iframe
							frameborder="0"
							width="100%"
							height="100"
							title="Band MP3"
							src="https://drive.google.com/file/d/1MDpolCKsND_w0A5KCaR7G9LmN2VRdQu-/preview?usp=sharing">
						</iframe>
						<div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>