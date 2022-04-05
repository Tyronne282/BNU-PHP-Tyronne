<?php include("class_lib.php"); ?>
<?php
	$jacob = new person();
	$harry = new person;

	$jacob->set_name("Jacob Smith");
	$harry->set_name("Harry Wilson");

	echo "Jacob's full name: " . $jacob->get_name();
    echo "<br/>";
	echo "Harry's full name: " . $harry->get_name();
?>