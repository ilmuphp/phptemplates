
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Hitung Diskon</title>
    <meta name="description" content="script sederhana untuk menghitung diskon harga" />
    <meta name="author" content="ilmuphp.net" />

    <style>body{font-family:sans-serif;}ul li:nth-child(even) {color: #00B300;} </style>
  </head>
  <body>
<?php
  $list_price = 100000;
  $discount_percent = 25;

  $discount_amount = $list_price * $discount_percent * .01;
  $discount_price = $list_price - $discount_amount ;
  function formatDigits($digit) {
   echo number_format($digit,0,",",".");
  }
?>
<ul>
  <li>Harga Normal: <del><?php formatDigits($list_price); ?></del></li>
  <li>Diskon: <?php echo $discount_percent . ' %'; ?></li>
  <li>Anda Hemat: <?php formatDigits($discount_amount); ?></li>
  <li>Harga Jual: <ins><?php formatDigits($discount_price); ?></ins></li>
</ul>
  </body>
</html>