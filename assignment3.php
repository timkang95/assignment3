<?php

  include "ParentClass.php";
  include "ChildClass.php";
  $annie = new ChildClass("Young Anakin", "odd");
  $anakin = new ChildClass("Anakin", "okay");
  $origTril = new ParentClass("Original Trilogy", "awesome");
  $newTril = new ParentClass("Force Awakens", "okay");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Assignment 3</title>

  <link rel="stylesheet" href="css/assignment3.css">
</head>
<body>
  <h1>An Honest Star Wars Review</h1>
  <fieldset>
    <legend>Honest Review Part 1</legend>
    <?= $annie; ?>
    <br>
    <?= $annie->setChar("mediclorians"); $annie->setOpinion("dumb"); ?>
    <?php echo "switched annie to mediclorians being dumb"; ?>
    <?= $annie; ?>
  </fieldset>

  <fieldset>
    <legend>Honest Review Part 2</legend>
    <?= $anakin; ?>
    <br>
    <?= $anakin->setChar("Obiwan"); $anakin->setOpinion("awesome"); ?>
    <?= $anakin; ?>
  </fieldset>

  <fieldset>
    <legend>Honest Review Part 3</legend>
    <?= $origTril; ?>
  </fieldset>

  <fieldset>
    <legend>Honest Review Part 4</legend>
    <?= $newTril; ?>
  </fieldset>

</body>
</html>