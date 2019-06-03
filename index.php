<?php
$dir = $_SERVER["DOCUMENT_ROOT"] . '/public/themes/default/images/hero-slider/';
$dots = array('.', '..');
$imgs = array_diff(scandir($dir), $dots);
?>

<div class="slider">
  <?php foreach ($imgs as $key => $img) : ?>
  <div class="slide">
    <img src="/public/themes/default/images/hero-slider/<?php echo $img; ?>" alt="" width="150">
  </div>
  <?php endforeach; ?>
</div>
