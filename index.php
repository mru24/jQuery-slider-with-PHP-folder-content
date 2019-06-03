<?php
// ASSIGN FOLDER WITH IMAGES
$dir = $_SERVER["DOCUMENT_ROOT"] . '/public/themes/default/images/hero-slider/';
// ASSIGN DOTS
$dots = array('.', '..');
// CREATE ARRAY AND REMOVE DOTS FROM ARRAY
$imgs = array_diff(scandir($dir), $dots);
?>

<div class="slider">
  <?php foreach ($imgs as $key => $img) : ?>
  <div class="slide">
    <img src="/public/themes/default/images/hero-slider/<?php echo $img; ?>" alt="">
  </div>
  <?php endforeach; ?>
</div>
