<!DOCTYPE html>
<html>
<head>
	<title>Joe's Feedback</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
</head>
<body>
	<div class="container">
		<div class="center">
		
		<div class="space">
			Link to my ThemePark: 
			<a href="http://167.99.253.247/csc443/delgadoj11/Computer-Theme-Park/">http://167.99.253.247/csc443/delgadoj11/Computer-Theme-Park/</a>
		</div>
		<div class="space">
			Team Member's Team Parks: 
            <br/> Aaron - <a href="http://167.99.253.247/csc443/hauserm3/CSC443/theme_park/themepark.php">http://167.99.253.247/csc443/hauserm3/CSC443/theme_park/themepark.php</a>
            <br/> Felix - <a href="http://167.99.253.247/csc443/fernandezf2/CSC-443/Assignment3/">http://167.99.253.247/csc443/fernandezf2/CSC-443/Assignment3/</a>
            <br/> Sam - <a href="http://167.99.253.247/csc443/beebes3/Assignments/3/themepark.php">http://167.99.253.247/csc443/beebes3/Assignments/3/themepark.php</a>
            <br/> Maxwell - <a href="http://167.99.253.247/csc443/delgadoj11/themeParkProposal/">http://167.99.253.247/csc443/delgadoj11/themeParkProposal/</a>
		</div>
		<div class="space">
			<?php
				date_default_timezone_set("America/New_York");
				echo "Today is " .date("m/d/y"), ", with the time of: ".date("h:i:sa"), "."						 ?>
		</div>
		<div class="space">
			This Table below is displaying improvements on the website.
			<?php
				echo "<html><body><table>\n\n";
				$f = fopen("Delgado Improvements for PC Builds.csv", "r");
				while (($line = fgetcsv($f)) !== false) {
						echo "<tr>";
						foreach ($line as $cell) {
								echo "<td>" . htmlspecialchars($cell) . "</td>";
						}
						echo "</tr>\n";
				}
				fclose($f);
				echo "\n</table></body></html>"; ?>
		</div>
		<div class="space">
			This Table below is displaying previous peer evaluations from other people.
			<?php
				echo "<html><body><table>\n\n";
				$f = fopen("Delgado Own Peer-Review 11-28-22.csv", "r");
				while (($line = fgetcsv($f)) !== false) {
						echo "<tr>";
						foreach ($line as $cell) {
								echo "<td>" . htmlspecialchars($cell) . "</td>";
						}
						echo "</tr>\n";
				}
				fclose($f);
				echo "\n</table></body></html>"; ?>
		</div>
		<div class="space">
			This Table below is displaying previous peer evaluations to other people.
			<?php
				echo "<html><body><table>\n\n";
				$f = fopen("Delgado_CSC443_assignment5.csv", "r");
				while (($line = fgetcsv($f)) !== false) {
						echo "<tr>";
						foreach ($line as $cell) {
								echo "<td>" . htmlspecialchars($cell) . "</td>";
						}
						echo "</tr>\n";
				}
				fclose($f);
				echo "\n</table></body></html>"; ?>
		</div>
	</div>
</body>
</html>