<?php
  $points = 13;
   // Message output will depend on the ponts given.
   if ($points >= 12)
   {
      echo "Public transport is your best option. <br/>";
   }
   elseif ($points >= 9)
   {
     echo "If you get caught say your grandmother was driving. <br/>";
   }
   else
   {
     echo "There is no need to worry about the speed limit.<br/>";
   }
?>