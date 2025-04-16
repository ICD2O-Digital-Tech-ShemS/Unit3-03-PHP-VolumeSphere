<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shem Irekpita">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Volume of a sphere </title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h3>Volume of a sphere</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./result.php" method="post" target="results">
        <label for="Radius">Radius</label>
        <input type="text" id="Radius" placeholder="Enter Radius" name="Radius">
        <br><br>
        <input type="submit" value="Calculate Volume">
		</form>

			<iframe id="results" name="results">			
        <div id="user-info">
          <div id="$Volume"></div>
        </div>
	    </iframe>
	</body>
	</body>
</html>
