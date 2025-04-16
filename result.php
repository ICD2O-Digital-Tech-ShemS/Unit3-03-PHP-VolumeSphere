<?php
	$radius = $_POST['Radius'];
	$volume =(4/3) *  pi() * pow($radius,3);
	$volume = round($volume,2);
?>
<h3>Results:</h3>
Volume of a sphere is <?php echo "$volume" ?>cm<sup>3</sup>.