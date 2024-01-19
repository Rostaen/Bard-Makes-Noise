<?php
// Special CSS used to ensure images are responsive
function responsiveImageCSS()
{
    echo '
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>';
}

// Displaying a single vidoe link
function videoFile($title, $url)
{
    echo '
    <div class="pb-3">
        <h3>' . $title . '</h3>
        <div class="youtube-vid-container">
            <iframe width="560" height="315" src="' . $url . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    ';
}

// Displaying multiple video links
function displayVideos($videoData)
{
    for ($x = 0; $x < count($videoData); $x++)
        videoFile($videoData[$x][0], $videoData[$x][1]);
}

// Displaying a single music file
function musicFile($title, $url)
{
    echo '
        <div class="pb-3">
            <h3>' . $title . '</h3>
            <div style="width: 100%; height: 100px; position: relative;">
                <iframe
                    frameborder="0"
                    width="100%"
                    height="100"
                    title="Band MP3"
                    src="' . $url . '">
                </iframe>
                <div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
            </div>
        </div>
    ';
}

// Displaying a single music file with subtitle
function musicFileWithSubtitle($title, $url, $subtitle)
{
    echo '
        <div class="pb-3">
            <h3>' . $title . '</h3>
            <p>' . $subtitle . '</p>
            <div style="width: 100%; height: 100px; position: relative;">
                <iframe
                    frameborder="0"
                    width="100%"
                    height="100"
                    title="Band MP3"
                    src="' . $url . '">
                </iframe>
                <div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
            </div>
        </div>
    ';
}

// Displaying multiple music files
function displayMusic($musicData)
{
    for ($x = 0; $x < count($musicData); $x++)
        musicFile($musicData[$x][0], $musicData[$x][1]);
}

// Displaying a basic carousel image
function basicImage($url, $alt, $imgNumber)
{
    echo '
        <div class="pb-3">
			<img src="https://www.bard.edu/bardmakesnoise/images/' . $url . '" alt="' . $alt . '" data-toggle="modal" data-target="#lsImg' . $imgNumber . '" style="width: 100%;">
		</div>
    ';
}

// Displaying all basic carousel images
function displayBasicImg($imageData)
{
    for ($x = 0; $x < count($imageData); $x++)
        basicImage($imageData[$x][0], $imageData[$x][1], $x + 1);
}

// Displaying carousel indicators for image navigation
function carouselIndicators($num)
{
    echo '<ul class="carousel-indicators">';
    for ($x = 0; $x < $num; $x++) {
        if ($x > 0)
            echo '<li data-target="#bigNoiseSlider" data-slide-to="' . $num . '"></li>';
        else
            echo '<li data-target="#bigNoiseSlider" data-slide-to="' . $x . '" class="active"></li>';
    }
    echo '</ul>';
}

// Displaying first carousel image that is active
function carouselImageFirst($url, $alt, $imgNumber)
{
    echo '
    <div class="carousel-item active">
        <img src="https://www.bard.edu/bardmakesnoise/images/' . $url . '" alt="' . $alt . '" data-toggle="modal" data-target="#lsImg' . $imgNumber . '">
    </div>
    ';
}

// Displaying carousel image that is not initiall active
function carouselImage($url, $alt, $imgNumber)
{
    echo '
    <div class="carousel-item">
        <img src="https://www.bard.edu/bardmakesnoise/images/' . $url . '" alt="' . $alt . '" data-toggle="modal" data-target="#lsImg' . $imgNumber . '">
    </div>
    ';
}

// Logic to display the first image or the rest of the images in a carousel
function displayImages($carouselData)
{
    for ($x = 0; $x < count($carouselData); $x++) {
        if ($x == 0)
            carouselImageFirst($carouselData[$x][0], $carouselData[$x][1], $x + 1);
        else
            carouselImage($carouselData[$x][0], $carouselData[$x][1], $x + 1);
    }
}

// Displaying controls for the carousel
function carouselControls()
{
    echo '
        <a class="carousel-control-prev" href="#bigNoiseSlider" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#bigNoiseSlider" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    ';
}

// Display the entire carousel
function displayCarousel($carouselData)
{
    echo '
        <section class="pb-4">
            <h2 class="pb-1">Photos</h2>
            <div id="bigNoiseSlider" class="carousel" data-ride="carousel">';
    carouselIndicators(count($carouselData));
    echo '
        <div class="carousel-inner">';
    displayImages($carouselData);
    echo '</div>';
    carouselControls();
    echo '</div></section>';
}

// Displaying a modal image pop-up when clicked on screen
function modalPopUp($number, $title, $url, $alt)
{
    echo '
    <div class="modal" id="lsImg' . $number . '">
        <div class="modal-dialog-mod">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">' . $title . '</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body d-flex justify-content-center">
                    <img src="https://www.bard.edu/bardmakesnoise/images/' . $url . '" class="img-fluid" alt="' . $alt . '" data-toggle="modal" data-target="#lsImg' . $number . '">
                </div>
            </div>
        </div>
    </div>
    ';
}

// Displaying all modal pop-up links
function displayModal($modalData)
{
    for ($x = 0; $x < count($modalData); $x++)
        modalPopUp($x + 1, $modalData[$x][0], $modalData[$x][1], $modalData[$x][2]);
}
