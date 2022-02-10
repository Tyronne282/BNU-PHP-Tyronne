<html>
<body>
<?php
    $hourlyrate = 5.75;
    $hoursperweek = 40;
    $tax = 1.22;
    $gross = $hourlyrate * $hoursperweek / $tax;
    echo $gross
?>
</body>
</html>
