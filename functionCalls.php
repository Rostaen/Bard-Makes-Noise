<?php
function musicFile($title, $url){
    echo '
        <h3>'.$title.'</h3>
        <div style="width: 100%; height: 100px; position: relative;">
            <iframe
                frameborder="0"
                width="100%"
                height="100"
                title="Band MP3"
                src="'.$url.'">
            </iframe>
            <div style="width: 53px; height: 55px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
        </div>
    ';
}

function carouselImage($url, $alt, $imgNumber){
    echo '
    <div class="carousel-item active">
        <img src="https://www.bard.edu/bardmakesnoise/images/'.$url.'" alt="'.$alt.'" data-toggle="modal" data-target="#lsImg'.$imgNumber.'">
    </div>
    ';
}

function modalPopUp($number, $title, $url, $alt){
    echo '
    <div class="modal" id="lsImg'.$number.'">
        <div class="modal-dialog-mod">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">'.$title.'</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body d-flex justify-content-center">
                    <img src="https://www.bard.edu/bardmakesnoise/images/'.$url.'" class="img-fluid" alt="'.$alt.'" data-toggle="modal" data-target="#lsImg'.$number.'">
                </div>
            </div>
        </div>
    </div>
    ';
}

?>
