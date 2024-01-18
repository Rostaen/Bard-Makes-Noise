<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Beastie Boys | Bands of Bard | Bard Makes Noise');
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
			<h1>Beastie Boys</h1>
			<p>
				One of the more infamous Bard-connected bands. Adam Yauch (1964–2012) founded the group with two friends while in high school in Brooklyn. During his time at Bard, Yauch studied electronic music and credited Professor Emeritus Elie Yarden with expanding his concept of music and sound. As a result "Yauch developed a new line-up, the hip-hop trio with Diamond and Horovitz, and then dropped out after two years... Their debut rap record, Cooky Puss, came in 1983" (<a href="https://www.theguardian.com/music/2012/may/05/adam-yauch" target="_blank">The Guardian</a>). In 2011, Yauch received the Charles Flint Kellogg Award in Arts and Letters, Bard's highest award in the arts, from the Bard College Alumni/ae Association. <a href="http://blog.beastieboys.com/post/5730508786/bard-visit" target="_blank">Read Adam's BeastieBoys.com blog entry about coming back to Bard</a>.
			</p>
		</div>
		<div class="col-lg-4 pb-3">
			<h2 class="pb-1">Photos</h2>
			<div class="pb-3">
				<img src="https://www.bard.edu/bardmakesnoise/images/beastieboys/adam-yauch-caption.jpg" alt="Adam Yaunch receiving Charles Flint Kellog award (from the Bardian)" data-toggle="modal" data-target="#lsImg2" style="width: 100%;">
			</div>
			<div class="pb-3">
				<img src="https://www.bard.edu/bardmakesnoise/images/beastieboys/beastieboysClipping.png" alt="Bard Observer writeup about Adam Yaunch touring with the Beastie Boys" data-toggle="modal" data-target="#lsImg1" style="width: 100%;">
			</div>		
		</div>
	</div>
	<div class="modal" id="lsImg1">
		<div class="modal-dialog-mod">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Bard Observer writeup about Adam Yaunch touring with the Beastie Boys</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/beastieboys/beastieboysClipping.png" class="img-fluid" alt="Bard Observer writeup about Adam Yaunch touring with the Beastie Boys" data-toggle="modal" data-target="#lsImg1">
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="lsImg2">
		<div class="modal-dialog-mod">
			<div class="modal-content" class="img-fluid">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Adam Yaunch receiving Charles Flint Kellog award (from the Bardian)</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body d-flex justify-content-center">
					<img src="https://www.bard.edu/bardmakesnoise/images/beastieboys/adam-yauch-caption.jpg" class="img-fluid" alt="Adam Yaunch receiving Charles Flint Kellog award (from the Bardian)" data-toggle="modal" data-target="#lsImg2">
				</div>
			</div>
		</div>
	</div>
<?php
	$page->close();
?>