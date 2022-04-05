<?php
  $topModules[0] = "Internet Systems Development";
  $topModules[10] = "Programming 1";
  $topModules[15] = "Programming 2";
  $topModules[30] = "OOAD";
  $topModules[40] = "Software Engineering";

  while(list($index,$value) = each($topModules))
  {
    echo "Index is $index  and value is $value <br/>";
  }
?>