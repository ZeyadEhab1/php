<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<title›Document</title›

</head›

<body›
<ul>
    <?php foreach ($person as $key => $val) : ?>
      <li><strong><?=$key; ?></strong> <?= $val; ?></li>
    <?php endforeach; ?>

</ul>

</body>



</html>
