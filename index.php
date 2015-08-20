<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Musings</title>
</head>
<body>

<!-- PHP functions -->

<!-- strlen function gives you the length of a string -->
<?php 
  $length = strlen("bobby");
  print $length;
  ?>


<!-- substr function allows you to select 2 array points from which to slice out a portion of a string -->
<?php
  $myname = "Bobby";
  $partial = substr($myname, 2, 4);
  print $partial;
  ?>


<!-- strtoupper function takes a variable and makes it uppercase -->
<?php 
  $uppercase = strtoupper($myname);
  print $uppercase;
  ?>
  
</body>
</html>