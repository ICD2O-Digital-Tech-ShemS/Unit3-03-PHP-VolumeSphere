<?php
	$radius = $_POST['Radius'];
	$volume =(4/3) *  pi() * pow($radius,3);
?>
<h3>Results:</h3>
Volume of a sphere is <?php echo "round($volume,2)" ?>cm<sup>3</sup>.