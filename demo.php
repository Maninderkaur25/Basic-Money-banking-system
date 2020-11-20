<!DOCTYPE html>
<html>
<head>
    <title>Customers Details</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<style>
	 
		table{
			border-collapse: collapse;
			width: 100%;
			color: black;
			font-family: 'Poppins',sans-serif;
			font-size: 20px;
			text-align: left;
		}
		th{
			text-align: center;
			height: 50px;
			background-color: #0f8a9d;
			color: white;
		}
		td{
			text-align: center;
				height: 40px;
		}
		
		h1{
			text-align: center;
			color: #0f8a9d;
			font-family: 'Poppins',sans-serif;
        }
        

	</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<a class="navbar-brand" href="#">Banking System</a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="Home.html">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="insert.php">Send Money</a>
	</li>
	<li class="nav-item active">
      <a class="nav-link" href="transaction.php">View Transactions</a>
    </li>
    
    
  </ul>
</nav>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<h1>Customers Details</h1>
	<table style="border: 5px solid  #0f8a9d;">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Current Balance:</th>
		
		</tr>
	
<?php
$conn = mysqli_connect("localhost", "id15454787_students", "r*kx1>Toa>o/Q4)K", "id15454787_banking");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Email"] . "</td><td>"
. $row["Current Balance"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>