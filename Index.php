<!DOCTYPE html>
2<html>
3<head>
4	<title>MySQL Table Viewer</title>
5</head>
6<body>
7	<h1>MySQL Table Viewer</h1>
8	<?php
9		// Define database connection variables
10		$servername = "glass.mysql.database.azure.com";
11		$username = "glassadmin";
12		$password = "User@1234";
13		$dbname = "employees";
14
15		// Create database connection
16		$conn = new mysqli($servername, $username, $password, $dbname);
17
18		// Check connection
19		if ($conn->connect_error) {
20			die("Connection failed: " . $conn->connect_error);
21		}
22
23		// Query database for all rows in the table
24		$sql = "SELECT * FROM mytable";
25		$result = $conn->query($sql);
26
27		if ($result->num_rows > 0) {
28			// Display table headers
29			echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
30			// Loop through results and display each row in the table
31			while($row = $result->fetch_assoc()) {
32				echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
33			}
34			echo "</table>";
35		} else {
36			echo "0 results";
37		}
38
39		// Close database connection
40		$conn->close();
41	?>
42</body>
43</html>
