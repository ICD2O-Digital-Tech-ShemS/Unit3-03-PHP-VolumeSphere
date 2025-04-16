<?php
	$radius = $_POST['Radius'];
	$volume =(4/3) * $radius**3 *pi()
?>
<h3>Results:</h3>
Volume of a sphere is <?php echo "$volume = round($volume,2)" ?>cm<sup>3</sup>.