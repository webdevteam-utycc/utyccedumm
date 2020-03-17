<?php 
// *** Include the class
    include("resize-class.php");

    $img = "sample.jpg";

    // *** 1) Initialise / load image
    $resizeObj = new resize($img);

    // *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
    $resizeObj -> resizeImage(400, 400, 'crop');

    // *** 3) Save image
    $resizeObj -> saveImage('thumb/'.$img, 800);

?>
