<?php

/**
 * Special CSS used to ensure images are responsive *
 */
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
/**
 * Displaying a single vidoe link with HTML elements.
 *
 * @param string $title The title of the video file.
 * @param string $url The full URL for where the video is being stored.
 */
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

/**
 * Printing HTML elements and displaying multiple video links from an array via the videoFile function call.
 *
 * @param array $videoData An array of elements used for the videoFile function call.
 */
function displayVideos($videoData)
{
    echo '
    <section class="mb-3">
        <h2 class="mb-1">Videos</h2>';
    for ($x = 0; $x < count($videoData); $x++)
        videoFile($videoData[$x][0], $videoData[$x][1]);
    echo '</section>';
}

/**
 * Printing HTML elements and using passed data to fill out unrepeated spots.
 *
 * @param string $title The title for the music file.
 * @param string $url The full URL for where the music file is being stored.
 * @param string $subTitle An optional field for when a musicFile has a sub title.
 */
function musicFile($title, $url, $subTitle = '')
{
    echo '
        <div class="pb-3">
            <h3>' . $title . '</h3>';
    if ($subTitle != '')
        echo '<p>' . $subTitle . '</p>';
    echo ' <div style="width: 100%; height: 100px; position: relative;">
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

/**
 * Printing HTML elements and displaying multiple music files
 *
 * @param array $musicData An array of music variables, array location 2 is sometimes set.
 */
function displayMusic($musicData)
{
    echo '
    <section class="pb-3">
        <h2 class="pb-1">Music</h2>';
    for ($x = 0; $x < count($musicData); $x++) {
        musicFile($musicData[$x][0], $musicData[$x][1], isset($musicData[$x][2]) ? $musicData[$x][2] : '');
    }
    echo '</section>';
}

/**
 * Printing HTML elements and displaying a basic carousel image
 *
 * @param string $url Ending URI for the image location.
 * @param string $alt Alt information for the image.
 * @param int $imgNumber Image number for pop-up reference in the modal section.
 */
function basicImage($url, $alt, $imgNumber)
{
    echo '
        <div class="pb-3">
			<img src="https://www.bard.edu/bardmakesnoise/images/' . $url . '" alt="' . $alt . '" data-toggle="modal" data-target="#lsImg' . $imgNumber . '" style="width: 100%;">
		</div>
    ';
}

/**
 * Displaying all basic carousel images
 *
 * @param array $imageData An array of information to print the image in a carousel
 */
function displayBasicImg($imageData)
{
    for ($x = 0; $x < count($imageData); $x++)
        basicImage($imageData[$x][0], $imageData[$x][1], $x + 1);
}

/**
 * Printing HTML elements and displaying carousel indicators for image navigation
 *
 * @param int $num The number of carousel indicators to display.
 */
function carouselIndicators($num)
{
    echo '<ul class="carousel-indicators">';
    for ($x = 0; $x < $num; $x++) {
        $activeClass = ($x == 0) ? 'active' : '';
        echo '<li data-target="#bigNoiseSlider" data-slide-to="' . $x . '" class="' . $activeClass . '"></li>';
    }
    echo '</ul>';
}

/**
 * Prints HTML elements and displaying carousel image
 *
 * @param string $url Ending URI for the image location.
 * @param string $alt Alt information for the image.
 * @param int $imgNumber Number associated to the modal to make pop-up images.
 * @param string $active A class item to let Bootstrap know this is the active item or not.
 */
function carouselImage($url, $alt, $imgNumber, $active)
{
    echo '
    <div class="carousel-item ' . $active . '">
        <img src="https://www.bard.edu/bardmakesnoise/images/' . $url . '" alt="' . $alt . '" data-toggle="modal" data-target="#lsImg' . $imgNumber . '">
    </div>
    ';
}

/**
 * Displays the images in a carousel
 *
 * @param array $carouselData An array of image information to be displayed in a carousel.
 */
function displayImages($carouselData)
{
    for ($x = 0; $x < count($carouselData); $x++) {
        $activeClass = ($x == 0) ? 'active' : '';
        carouselImage($carouselData[$x][0], $carouselData[$x][1], $x + 1, $activeClass);
    }
}

/**
 * HTML elements to displays controls for the carousel.
 */
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

/**
 * HTML elements and displaying the entire carousel with function calls.
 *
 * @param array $carouselData An array to be passed to the appropriate functions.
 */
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

/**
 * HTML elements and displaying a modal image pop-up when clicked on screen.
 *
 * @param int $number The number associated with the image in the carousel to pop-up when clicked.
 * @param string $title The image title.
 * @param string $url The ending URI for the image location for the pop-up.
 * @param string $alt Alt information for the image.
 */
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

/**
 * Displaying all modal pop-up links with a function call to modalPopUp.
 *
 * @param array $modalData An array of information for the modal pop-up.
 */
function displayModal($modalData)
{
    for ($x = 0; $x < count($modalData); $x++)
        modalPopUp($x + 1, $modalData[$x][0], $modalData[$x][1], $modalData[$x][2]);
}
