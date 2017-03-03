<?php
if ($_POST != null) {
  $h = $_POST['height'];
  $w = $_POST['width'];
  $bmi = round($w / ($h * $h), 2);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BMI計算</title>
  </head>
  <body>
    <h1>BMI計算</h1>
    <form action="index.php" method="post">
      <p>身長を入力してください：<input type="text" name="height" placeholder="1.67"></p>
      <p>体重を入力してください：<input type="text" name="width" placeholder="55"></p>
      <p><input type="submit" value="計算"></p>
    </form>
    <?php if (isset($bmi)): ?>
      <p>BMI = <?php echo $bmi ?></p>
    <?php endif ?>
  </body>
</html>
