<!--  Various SQL queries made here -->

<?php
require('config/connection.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// If the user searches by name
if(isset($_POST['nameSearch']))
{
	$sql = "SELECT * FROM Candidates WHERE name LIKE '%$_POST[name]%'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {

	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        echo "<b>Name:</b> " . $row["name"] . 
	        " <b>Age:</b> " . $row["age"] . 
	        " <b>Sex:</b> " . $row["sex"] . 
	        " <b>Party Affiliation:</b> " . 
	        $row["party"] . "<br>";
	    }
	} else {
    echo "0 results<br>";
	}
} 

$party = isset($_POST['parties']) ? $_POST['parties'] : '';

// If the user searched by party
if(isset($_POST['partySearch']))
{
	$sql2 = "SELECT * FROM Candidates WHERE party='$party'";
	$result2 = mysqli_query($conn, $sql2);

	echo "Here is a listing of all ";
	if ($_POST['parties'] == 'r')
	{
		echo "Republicans: ";
	}
	else if ($_POST['parties'] == 'd')
	{
		echo "Democrats: ";
	}
	else
		echo "Independents: ";
	echo "<br><br>";

	// List candidates based on party affiliation
	while($row = mysqli_fetch_assoc($result2))
	{
        echo "<b>Name:</b> " . $row["name"] . " <b>Age:</b> " . $row["age"] . " <b>Sex:</b> " . $row["sex"]
        . " <b>State:</b> " . $row["homeState"] . "<br>";
	}
}

$conn->close();
?>
<br>
<button onclick="goBack()">Click here to return.</button>
<script>
function goBack() {
    window.history.back();
}
</script>